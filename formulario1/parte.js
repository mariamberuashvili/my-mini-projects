function anadirPersona() {
    let nif = document.getElementById("nif").value;
    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;
    let messages = document.getElementById("messages");

    if (!nif || !nombre || !apellidos) {
        messages.textContent = "Todos los campos son obligatorios";
        return;
    }

    let persona = {
        nif: nif,
        nombre: nombre,
        apellidos: apellidos
    };

    let personas = JSON.parse(localStorage.getItem("personas")) || [];
    personas.push(persona);
    localStorage.setItem("personas", JSON.stringify(personas));
    messages.textContent = "Datos guardados";
    document.getElementById("formulario").reset();
}