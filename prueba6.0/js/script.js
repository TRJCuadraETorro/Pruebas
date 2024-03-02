document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search-input');
    const productos = document.querySelectorAll('.producto');

    searchInput.addEventListener('input', function () {
        const searchTerm = searchInput.value.toLowerCase();

        productos.forEach(function (producto) {
            const nombreProducto = producto.querySelector('h3').textContent.toLowerCase();
            if (nombreProducto.includes(searchTerm)) {
                producto.style.display = 'block';
            } else {
                producto.style.display = 'none';
            }
        });
    });
});