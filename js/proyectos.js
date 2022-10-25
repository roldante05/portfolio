const proyectoArray = [
    
{
    nombre: 'ABM CLIENTES',
    descripcion: 'Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.',
    repositorio: 'https://github.com/roldante05/php/tree/main/abmclientes',
    demo:'',
    imagen: 'abmclientes.png'
},
{
    nombre: 'SISTEMA DE GESTIÓN DE VENTAS',
    descripcion: 'Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.',
    repositorio: 'https://github.com/roldante05/php/tree/main/sistema_ventas',
    demo:'',
    imagen: 'abmventas.png'
},
{
    nombre: 'GESTOR DE TAREAS',
    descripcion: 'Crear, eliminar y editar una tarea, Realizado en HTML, CSS, PHP, MVC, Bootstrap y Json ',
    repositorio: 'https://github.com/roldante05/php/tree/main/gestor_de_tareas',
    demo:'',
    imagen: 'tareas.png'
},
{
    nombre: 'COMENTARIOS',
    descripcion: 'Crear, eliminar y editar un comentario, Realizado en HTML, CSS, PHP, MVC, Bootstrap y MySQL ',
    repositorio: 'https://github.com/roldante05/5-proyectos-php/tree/main/Comentarios',
    demo:'',
    imagen: 'comentarios.png'
},
{
    nombre: 'PADLET',
    descripcion: 'Crear, eliminar y editar un padlet, Realizado en Laravel 9, Bootstrap y CSS ',
    repositorio: 'https://github.com/roldante05/laravel-9/tree/main/padlet',
    demo:'',
    imagen:'padlet.jpg',
    url: ''
},
{
    nombre: 'RULETA MENTORING',
    descripcion: 'Desarrollado en colobaroación con compañeros de Fundación Pescar, Realizado con HTML, CSS, Javascript, Boostrap y libreria de Winwheel.js ',
    repositorio: 'https://lnkd.in/dK3fXmHk',
    demo:'https://mentoring-santander-gamma.vercel.app/',
    imagen:'mentoring.jpg',
    urlimg: ''
},
{
    nombre: 'RICK & MORTY',
    descripcion: 'Barra de busqueda de personajes de la serie RICK&MORTY, realizado con React.JS, Bootstrap y Api de rick&morty',
    repositorio: 'https://lnkd.in/dn9AuYH2',
    demo:'https://lnkd.in/dmgebqeN',
    imagen:'rickymortyar.png',
    url: ''
},
{
    nombre: 'CALCULADORA',
    descripcion: 'Calculadora estandar, realizado en React.JS y con la libreria Math.js',
    repositorio: 'https://github.com/roldante05/react-projects/tree/main/calculadora',
    demo:'https://calcula-dan.netlify.app/',
    imagen:'calculadora.png',
    url: ''
},
{
    nombre: 'TIC TAC TOE',
    descripcion: 'Juego de TA-TE-TI, realizado unicamente con React.JS Y CSS',
    repositorio: 'https://github.com/roldante05/react-projects/tree/main/tic-tac-toe',
    demo:'',
    imagen:'tateti.png',
    url: ''
},


];





const contenedorProyecto = document.querySelector('.contenedor-proyecto');

proyectoArray.forEach( (dato)=>{
    console.log(dato.nombre);

    contenedorProyecto.innerHTML += `<div class="col-12 col-sm-4 p-3">
    <div class="proyecto">
        
    ${dato.imagen ? `<img ${ "src=./images/img-proyectos/"+dato.imagen } alt="${dato.nombre}" class="img-fluid"> `  : `<img  src="${dato.url}" alt="ABM clientes" class="img-fluid">`}
        
        <h2 class="p-3 d-block">${ dato.nombre }</h2>
        <p class="p-3 pb-5 d-block">${ dato.descripcion }</p>
        <div class="row my-5 align-items-center">
            <div class="col-6 ps-4">
             <a href=${ dato.repositorio } target="_blank" class="btn btn-rojo">Ver Repositorio</a>
            </div>
            <div class="col-6 text-center">
            ${dato.demo ? `<a  href="${dato.demo}" target="_blank" class="btn-blanco" >Ver online</a> ` : `<a onclick="return false;" href="${dato.demo}" target="_blank" class="text-black" style="cursor: default;  background-color:#a1a1a1;  border-radius:16px ;  padding: 6px 12px; ">Ver online</a> `}
            </div>
        </div>
    </div>
</div>`
})
{/* <a onclick="return false;" href="${dato.demo}" target="_blank" class="">Ver online</a> */}
{/* <img ${ "src=./images/"+dato.imagen } alt="ABM clientes" class="img-fluid"> */}
{/* <div class="col-12 col-sm-4 p-3">
                <div class="proyecto">
                    <img src="./images/abmclientes.png" alt="ABM clientes" class="img-fluid">
                    <h2 class="p-3 d-block">ABM clientes</h2>
                    <p class="p-3 pb-5 d-block">Alta, baja y modificación de un registro de clientes. Realizado en HTML,
                        CSS,
                        PHP, Bootstrap y Json.</p>
                    <div class="row my-5">
                        <div class="col-6 ps-4">
                            <a href="https://github.com/roldante05/php/tree/main/abmclientes" target="_blank" class="btn btn-rojo">Ver Repositorio</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="projects/fuente.txt" target="_blank">Codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div> */}
