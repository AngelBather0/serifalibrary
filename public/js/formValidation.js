function validarFormulario() {
    var nombre = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var asunto = document.getElementById('asunto').value;

    if (!/^[a-zA-Z]+$/.test(nombre) || nombre.length < 3) {
        alert('Nombre inválido. Debe contener al menos 3 caracteres y no debe contener números.');
        return;
    }

    if (!/\S+@\S+\.\S+/.test(email)) {
        alert('Email inválido. Debe ser un email válido.');
        return;
    }

    if (asunto.length < 10) {
        alert('El asunto debe tener al menos 10 caracteres.');
        return;
    }

    alert('Formulario enviado correctamente!');
}