window.onsubmit = (event) => {
    let nom = document.querySelector('[name="nombre"]').value.trim();
    let ape = document.querySelector('[name="apellido"]').value.trim();
    let em  = document.querySelector('[name="email"]').value.trim();
    let tel = document.querySelector('[name="telefono"]').value.trim();

    if (!nom || !ape || !em || !tel) {
        alert("Por favor, rellene todos los campos obligatorios.");
        event.preventDefault();
    }
};
