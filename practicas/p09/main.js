document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formularioProductos").onsubmit = function(event) {
        var hasErrors = false; // Bandera para detectar errores

        var nombre = document.getElementById("form-nombre");
        if (nombre.value == '' || nombre.value.length > 100) {
            alert('El nombre es obligatorio y debe tener a lo más 100 caracteres.');
            hasErrors = true;
        }

        var modelo = document.getElementById("form-modelo");
        const alphaNumericPattern = /^[a-zA-Z0-9]*$/;
        if (modelo.value == ''|| !alphaNumericPattern.test(modelo.value) || modelo.value.length > 25) {
            alert("El modelo es requerido, debe ser alfanumérico y tener 25 caracteres o menos.");
            hasErrors = true;
        }

        var precio = document.getElementById("form-precio");
        const priceValue = parseFloat(precio.value);
        if (isNaN(priceValue) || priceValue <= 99.99) {
            alert("El precio es requerido y debe ser mayor a 99.99.");
            hasErrors = true;
        }

        var historia = document.getElementById("form-detalles");
        if (historia.value.length > 250) {
            alert("La historia debe tener a lo más 250 caracteres.");
            hasErrors = true;
        }

        var unidades = document.getElementById("form-unidades");
        const unitsValue = parseInt(unidades.value);
        if (isNaN(unitsValue) || unitsValue < 0) {
            alert("Las unidades deben ser mayores o iguales a 0.");
            hasErrors = true;
        }

        // Si se encontraron errores, evitamos que el formulario se envíe
        if (hasErrors) {
            event.preventDefault();
        }
        else{
            const imagen = document.getElementById("form-imagen");
            const imagenDefecto = "img/imagen.png";
            if (imagen.value == "") {
                imagen.value = imagenDefecto;
        }
        }
    }
});