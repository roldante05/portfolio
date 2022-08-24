<?php

include_once "config.php";
include_once "entidades/producto.php";
include_once "entidades/tipoproducto.php";


$producto = new Producto();
$producto->cargarFormulario($_REQUEST);



$pg = "Productos";

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            //Busco el producto que esta en la BBDD, para extraer 
            // el nombre anterior de la imagen 

            $productoAux = new Producto();
            $productoAux->idproducto = $_GET['id'];
            $productoAux->obtenerPorId();

            if ($_FILES["img"]["error"] === UPLOAD_ERR_OK) {
                if (file_exists("files/" . $productoAux->imagen)) {
                    unlink("files/" . $productoAux->imagen);
                }
                $nombreAleatorio = date("Ymdhmsi") . rand(1000, 2000);
                $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                $archivo_tmp = $_FILES["img"]["tmp_name"];
                $nombreImagen = $producto->imagen = "$nombreAleatorio.$extension";
                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                    move_uploaded_file($archivo_tmp, "files/$nombreAleatorio.$extension");
                    $producto->imagen = "$nombreAleatorio.$extension";
                }
            } else {
                $producto->imagen = $productoAux->imagen;
            }
            //Actualizo un cliente existente
            $producto->actualizar();
        } else {
            if ($_FILES["img"]["error"] === UPLOAD_ERR_OK) {
                $nombreAleatorio = date("Ymdhmsi") . rand(1000, 2000); //2021010420453710
                $archivo_tmp = $_FILES["img"]["tmp_name"];
                $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                    move_uploaded_file($archivo_tmp, "files/$nombreAleatorio.$extension");
                    $producto->imagen = "$nombreAleatorio.$extension";
                }
            }
            //Es nuevo
            $producto->insertar();
        }
        $msg["texto"] = "Guardado correctamente";
        $msg["codigo"] = "alert-success";
    } else if (isset($_POST["btnBorrar"])) {

        $productoAux = new Producto();
        $productoAux->idproducto = $_GET['id'];
        $productoAux->obtenerPorId();

        if (file_exists("files/" . $productoAux->imagen)) {
            unlink("files/" . $productoAux->imagen);
        }

        $producto->eliminar();
        header("Location: producto-listado.php");
    }
}



if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $producto->obtenerPorId();
}

$tipoProducto = new TipoProducto();
$aTipoProducto = $tipoProducto->obtenerTodos();


include_once("header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Productos</h1>
    <?php if (isset($msg)) : ?>
        <div class="row">
            <div class="col-12">
                <div class="alert <?php echo $msg["codigo"]; ?>" role="alert">
                    <?php echo $msg["texto"]; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="producto-listado.php" class="btn btn-primary mr-2">Listado</a>
                <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
                <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
                <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6 form-group">
                <label for="txtNombre">Nombre:</label>
                <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $producto->nombre ?>">
            </div>
            <div class="col-6 form-group">
                <label for="lstProducto">Tipo producto:</label>
                <select class="form-control" name="lstProducto" id="lstProducto" required>
                    <option value="" disabled selected>Seleccionar</option>
                    <?php foreach ($aTipoProducto as $tipoProducto) : ?>
                        <?php if ($tipoProducto->idtipoproducto  == $producto->fk_idtipoproducto) : ?>
                            <option selected value="<?php echo $tipoProducto->idtipoproducto; ?>"><?php echo $tipoProducto->nombre; ?></option>
                        <?php else : ?>
                            <option value="<?php echo $tipoProducto->idtipoproducto; ?>"><?php echo $tipoProducto->nombre; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-6 form-group">
                <label for="txtCantida">Cantidad:</label>
                <input type="number" required class="form-control" name="txtCantida" id="txtCantida" value="<?php echo $producto->cantidad ?>">
            </div>
            <div class=" col-6 form-group">
                <label for="txtPrecio">Precio:</label>
                <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" required value="<?php echo $producto->precio ?>">
            </div>
            <div class="col-6 form-group">
                <label for="txtDescripcion">Descripcion:</label>

                <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" cols="30" rows="5"> <?php echo $producto->descripcion  ?></textarea>

            </div>
            <div class="col-7 form-group">
                <label for="img">Imagen:</label>
                <input type="file" name="img" id="img" value="<?php echo $producto->imagen ?>">
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#txtDescripcion'))
        .catch(error => {
            console.error(error);
        });
</script>

<?php include_once("footer.php"); ?>