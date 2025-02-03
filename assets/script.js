document.addEventListener("DOMContentLoaded", function () {
    const step1Button = document.getElementById("trexjc-step1");
    const step2Button = document.getElementById("trexjc-step2");
    const step3Button = document.getElementById("trexjc-step3");

    step1Button.addEventListener("click", function () {
        ejecutarPaso(1, step1Button, step2Button);
    });

    step2Button.addEventListener("click", function () {
        ejecutarPaso(2, step2Button, step3Button);
    });

    step3Button.addEventListener("click", function () {
        ejecutarPaso(3, step3Button, null);
    });
});

function ejecutarPaso(paso, botonActual, botonSiguiente) {
    botonActual.disabled = true;
    botonActual.textContent = "Ejecutando...";
    
    fetch(ajaxurl, {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `action=trexjc_step${paso}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            botonActual.textContent = "Completado";
            botonActual.style.backgroundColor = "#4CAF50";
            if (botonSiguiente) botonSiguiente.disabled = false;
        } else {
            botonActual.disabled = false;
            botonActual.textContent = `Ejecutar Paso ${paso}`;
            alert("Error: " + data.message);
        }
    })
    .catch(error => {
        botonActual.disabled = false;
        botonActual.textContent = `Ejecutar Paso ${paso}`;
        alert("Error de conexión");
    });
}
