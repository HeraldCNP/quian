document.querySelector('#submit').addEventListener('click', function() {


    let nombre = document.querySelector('#nombre').value;
    let email = document.querySelector('#email').value;
    let asunto = document.querySelector('#asunto').value;
    let mensaje = document.querySelector('#mensaje').value;

    if (nombre == "" || email == "" || asunto == "" || mensaje == "") {
        alert("llene todos los campos requeridos");
    } else {
        let url = "https://api.whatsapp.com/send?phone=59173867629&text=*_Mensaje_Web_*%0A*Nombre*%0A" + nombre + "%0A*Email*%0A" + email + "%0A*Asunto*%0A" + asunto + "%0A*Mensaje*%0A" + mensaje;
        window.open(url);
    }


});
