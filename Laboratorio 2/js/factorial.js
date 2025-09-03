document.getElementById("formFactorial").addEventListener("submit", function (event) {
    const valor = document.getElementById("numero").value.trim();

    if (valor === "") {
        alert("Debes ingresar un número.");
        event.preventDefault();
        return;
    }

    const num = Number(valor);

    if (isNaN(num)) {
        alert("El valor ingresado no es un número.");
        event.preventDefault();
        return;
    }

    if (num < 0) {
        alert("El número debe ser mayor o igual a 0.");
        event.preventDefault();
        return;
    }
});
