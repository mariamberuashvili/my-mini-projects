function calcularDescuento() {
    let importe = parseFloat(document.getElementById("importe").value);
    
  
    let importeConDescuento;
    if (importe >= 0 && importe < 100) {
        importeConDescuento = importe;
    } else if (importe >= 100 && importe < 200) {
        importeConDescuento = importe * 0.95;
    } else if (importe >= 200 && importe < 500) {
        importeConDescuento = importe * 0.90;
    } else if (importe >= 500) {
        importeConDescuento = importe * 0.85;
    } else {
        importeConDescuento = 0;
    }
    
    
    
    document.getElementById("importeConDescuento").textContent = "Importe con descuento: " + importeConDescuento.toFixed(2);
}