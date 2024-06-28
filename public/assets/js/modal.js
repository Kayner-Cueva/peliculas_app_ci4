// Obtener el modal y el botón para cerrar
var modal = document.getElementById("nuevoModal");
var cerrarModal = document.getElementById("cerrarModal");

// Mostrar el modal
function mostrarModal() {
    modal.style.display = "block";
}

// Cerrar el modal cuando se hace clic en la "x" o en el fondo oscuro
cerrarModal.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
