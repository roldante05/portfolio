<?php

include_once "config.php";
include_once "entidades/venta.php";
$pg = "Listado de Ventas";

$venta = new Venta();
$aVentas = $venta->obtenerTodos();

include_once("header.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Listado de Ventas</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover border">
        <tr>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Cliente</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($aVentas as $venta) : ?>
            <tr>
                <td><?php echo $venta->fecha; ?></td>
                <td><?php echo $venta->cantidad; ?></td>
                <td><?php echo $venta->fk_idproducto; ?></td>
                <td><?php echo $venta->fk_idcliente; ?></td>
                <td><?php echo $venta->total; ?></td>
                <td style="width: 110px;">
                    <a href="venta-formulario.php?id=<?php echo $venta->idventa; ?>"><i class="fas fa-search"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include_once("footer.php"); ?>