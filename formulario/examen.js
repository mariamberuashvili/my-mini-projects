function anadirPersona() {
    var nombre = document.getElementById("nombre").value;
    var apellidos = document.getElementById("apellidos").value;
    var direccion = document.getElementById("direccion").value;
    var messagesDiv = document.querySelector(".messages");
    var datosPersonaElem = document.getElementById('datosPersona');

    if (nombre === "" || apellidos === "" || direccion === "") {
        messagesDiv.innerHTML = "Todos los campos son obligatorios";
        return;
    }

    messagesDiv.innerHTML ="Formulario completado:" + nombre + " " + apellidos + " (" + direccion + " )";

   
}