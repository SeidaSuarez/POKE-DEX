"use strict";

document.addEventListener("DOMContentLoaded", function () {
    // Cerrar el mensaje de éxito después de 5 segundos
    setTimeout(function () {
        var successAlert = document.getElementById("success-alert");
        if (successAlert) {
            successAlert.style.display = "none";
        }
    }, 5000); // 5000 milisegundos = 5 segundos

    // Cerrar el mensaje de error después de 5 segundos
    setTimeout(function () {
        var errorAlert = document.getElementById("error-alert");
        if (errorAlert) {
            errorAlert.style.display = "none";
        }
    }, 5000); // 5000 milisegundos = 5 segundos
});
