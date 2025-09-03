function validarNumero() {
    const numero = parseInt(document.getElementById("numero").value);

    if (isNaN(numero)) {
        alert("Ingrese un numero valido.");
        return false;
    }

    if (numero < 1 || numero > 10) {
        alert("El numero debe estar entre 1 y 10.");
        return false;
    }

    return true;
}