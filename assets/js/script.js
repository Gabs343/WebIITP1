// Esto es un comentario para una línea
/* Comentario para varias líneas */

function alerta() {
    document.write('Mi primer Script desde una función'); // borra el contenido HTML de la página cuando se ejecuta
}

function t_nuevo() {
    var element = document.getElementById("test");
    element.innerHTML = "Nuevo texto desde JS"; // sobreescribe al elemento
}

function MostraMeses() {
    var mesesAnio = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Abril', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    document.getElementById('mostrar').value = mesesAnio.toString(); // convierte el array en string
}

function cambiaColor(colorin) {
    document.bgColor = colorin
}

function cambiaImagen(imagen) {
    document.getElementById("foto").src = "mouse_nuevo.jpg";
}