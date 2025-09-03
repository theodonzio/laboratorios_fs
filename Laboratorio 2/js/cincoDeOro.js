function validar() {
    let jugadas = document.getElementById('jugadas').value;
    if (jugadas < 1 || isNaN(jugadas)) {
        alert("Ingresa un número válido mayor a 0");
        return false;
    }
    return true;
}
