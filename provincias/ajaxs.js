function leerProvincias() {
    var url = " ";
    var request = new XMLHttpRequest();
    request.responseType = "json"; 
    request.open("GET", url); 
    request.onload = function () {
        if (request.status === 200) {
            actualizarIU(request.response); 
        } else {
            console.error("Error al cargar las provincias: " + request.status);
        }
    };
    request.onerror = function () {
        console.error("Error de conexión.");
    };
    request.send();
}

function actualizarIU(provinciasData) {
    var contenedor = document.getElementById("DivProvincias");
    contenedor.innerHTML = ""; 

    
    var provincias = provinciasData.provincias || [];

    for (var i = 0; i < provincias.length; i++) {
        var provincia = provincias[i];
        var divProv = document.createElement("div");
        divProv.setAttribute("class", "DivProvincias");
        divProv.innerHTML = "Provincia " + provincia.Nombre_comun + ": " + provincia.stock;
        contenedor.appendChild(divProv);
    }
}
