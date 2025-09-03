function validar() {
    let name = document.getElementById("name").value.trim();
    let ci   = document.getElementById("ci").value.trim();
    let city = document.getElementById("city").value.trim();
    let dir  = document.getElementById("dir").value.trim();
    let tel  = document.getElementById("tel").value.trim();
    let mail = document.getElementById("mail").value.trim();

    if (name === "") {
        alert("Por favor ingrese el nombre completo");
        return false;
    }
    if (ci === "" || isNaN(ci)) {
        alert("Ingrese una C.I. válida (solo números)");
        return false;
    }
    if (city === "") {
        alert("Por favor ingrese la localidad");
        return false;
    }
    if (dir === "") {
        alert("Por favor ingrese la dirección");
        return false;
    }
    if (tel === "" || isNaN(tel)) {
        alert("Ingrese un teléfono válido (solo números)");
        return false;
    }
    if (mail === "" || !mail.includes("@")) {
        alert("Ingrese un mail válido");
        return false;
    }

    let nota1 = document.getElementsByName("nota1")[0].value.trim();
    if (nota1 === "" || isNaN(nota1) || nota1 < 1 || nota1 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota2 = document.getElementsByName("nota2")[0].value.trim();
    if (nota2 === "" || isNaN(nota2) || nota2 < 1 || nota2 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota3 = document.getElementsByName("nota3")[0].value.trim();
    if (nota3 === "" || isNaN(nota3) || nota3 < 1 || nota3 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota4 = document.getElementsByName("nota4")[0].value.trim();
    if (nota4 === "" || isNaN(nota4) || nota4 < 1 || nota4 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota5 = document.getElementsByName("nota5")[0].value.trim();
    if (nota5 === "" || isNaN(nota5) || nota5 < 1 || nota5 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota6 = document.getElementsByName("nota6")[0].value.trim();
    if (nota6 === "" || isNaN(nota6) || nota6 < 1 || nota6 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota7 = document.getElementsByName("nota7")[0].value.trim();
    if (nota7 === "" || isNaN(nota7) || nota7 < 1 || nota7 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota8 = document.getElementsByName("nota8")[0].value.trim();
    if (nota8 === "" || isNaN(nota8) || nota8 < 1 || nota8 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota9 = document.getElementsByName("nota9")[0].value.trim();
    if (nota9 === "" || isNaN(nota9) || nota9 < 1 || nota9 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    let nota10 = document.getElementsByName("nota10")[0].value.trim();
    if (nota10 === "" || isNaN(nota10) || nota10 < 1 || nota10 > 12) {
        alert("La nota debe ser un número entre 1 y 12");
        return false;
    }

    return true;
}