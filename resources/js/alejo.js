//Definición de Variables y constantes
//const img_perfil = "https://icons.iconarchive.com/icons/saviourmachine/chat/48/music-icon.png";
const img_perfil = "assets/img/gallery/foto.png";
//const inicio = document.getElementById('iniciosesion');
const inicio = document.getElementById("iniciosesion");
const registro = document.getElementById("btn_enviar_registro");
const cierre = document.getElementById('logout');
const form_registro = document.getElementById('form_registro');
const btn_iniciar_sesion = document.getElementById("btn_iniciar_sesion");
//const login_form = document.getElementById('frm_login');
const login_form = document.getElementById('login_nuevo');
const mifoto = document.getElementById("mifoto");
const mifotoapi = document.getElementById('mifotoapi');

window.onload = init;

function init() {
    func_ocultar();
    btn_enviar.addEventListener("click", login);
}


//Registrar usuarios
function registrar() {

    let miUser;
    let nombre = document.getElementById("nombre");
    let apellido = document.getElementById("apellido");
    let usuario = document.getElementById("usuario");
    //let celular = document.getElementById("celular");
    //let correo = document.getElementById("email");
    //let genero = document.getElementById("genero");
    let clave = document.getElementById("clave1");
    let clave2 = document.getElementById("clave2");

    if (nombre.value != "" && apellido.value != "" && usuario.value != ""
        && genero.value != "" && clave.value != "" && clave2.value != "" && clave.value === clave2.value) {

        miUser = {
            nombre: nombre.value,
            apellido: apellido.value,
            usuario: usuario.value,
            //celular: celular.value,
            //correo: correo.value,
            genero: genero.value,
            clave: md5(clave.value)
        };

        localStorage.setItem("usuario", JSON.stringify(miUser));
        alert("¡Muy bien, registro exitoso!");
        window.location.href = '/login';
    }
    else if (clave.value != clave2.value) {
        alert("Las contraseñas no coinciden");
    }
}
/*
function coinciden() {


    const feedback = document.getElementById("feedback");
    let clave = document.getElementById("clave1");
    let clave2 = document.getElementById("clave2");

    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        clave2.addEventListener('keyup', event => {
            if (clave.value != clave2.value) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

}
*/
try {
    if (form_registro) {
        form_registro.addEventListener('submit', (event) => {
            event.preventDefault();
            registrar();
        });
    }
} catch (error) {
    console.log(error);
}

//<!-----------------------------------------------------------------------------------------------¡>
//PARA EL LOGIN
//Función activada con el submit

if (login_form) {
    login_form.addEventListener('submit', (event) => {
        event.preventDefault();

        let user1 = document.getElementById('usuario').value;
        let psw = document.getElementById('clave').value;
        let pswmd5 = md5(psw);
        login(user1, pswmd5);
    });
}

function login(username, clave) {

    let usuario_ls = localStorage.getItem("usuario");

    let user = JSON.parse(usuario_ls);

    if ((user.usuario === username && user.clave === clave)) {
        localStorage.setItem("logueado", true);
        alert('Bienvenido ' + user.nombre);
        window.location.href = "/";
    } else {
        alert("Revise los datos");
    }
}

showlogapi();

//<!-----------------------------------------------------------------------------------------------¡>

const navigateTo = (url) => {
    location.href = url;
};

registro.addEventListener('click', () => {
    console.log("Hiciste click en ir a registro");
    irARegistro();
});

inicio.addEventListener("click", () => {
    alert("click en iniciar sesión");
    console.log("click en iniciar sesión");
    window.location.href = "/login";
});

cierre.addEventListener("click", () => {
    alert("click en cerrar sesión");
    //console.log("click en iniciar sesión");
    //window.location.href = "login.html";
});

// Comprobación de logueo de un usuario
// En este caso, será del API de Spotify
document.addEventListener('DOMContentLoaded', function () {
    const apiSpotify = document.getElementById('miapi');

    let logueado = localStorage.getItem("logueado");

    if (apiSpotify) {
        apiSpotify.addEventListener('click', () => {
            if (logueado === 'true') {
                window.location.href = '/playlist';
            } else {
                alert('Debes crear una cuenta para buscar playlists')
                return window.location.href = '/registrate';
            }
        })
    }
});

//Para ocultar el botón de inicio sesión
function func_ocultar() {
    let usuario_ls = localStorage.getItem("usuario");
    let user = JSON.parse(usuario_ls);
    let html;

    if (localStorage.getItem('logueado') === 'true') {
        const showElement = document.getElementById('logout')
        const elementToHide = document.getElementById('iniciosesion');
        elementToHide.style.display = 'none';
        showElement.style.display = 'block';
        html = `<a class = "text-1000" id="nombre-perfil">¡Bienvenid@ ${user.usuario}!&nbsp;</a><img src="${img_perfil}" /><a>&nbsp;</a>`
        mifoto.innerHTML = html;

    } else {
        const showElement = document.getElementById('iniciosesion')
        const elementToHide = document.getElementById('logout');
        elementToHide.style.display = 'none';
        showElement.style.display = 'block';
    }
}

function logingout() {

    localStorage.setItem("logueado", false);
    location.reload(true);
}

function showlogapi() {
    const mifotoapi = document.getElementById('mifotoapi');
    let usuario_ls = localStorage.getItem("usuario");
    let user = JSON.parse(usuario_ls);
    let htmlapi = `<a class = "text-1000" id="nombre-perfil">¡Bienvenid@ ${user.usuario}!&nbsp;</a><img src="${img_perfil}" /><a>&nbsp;</a>`
    mifotoapi.innerHTML = htmlapi;
}

function logoutapi() {
    localStorage.setItem("logueado", false);
    location.href = "index.html";
}

//Resetear el formulario del login e ir a registrate
function irARegistro(event) {
    console.log("Hice click en ir a registro");
    login_form.reset();
    window.location.href = '/registrate';
}
/*
function toBlog() {
    location.href = "blog.html";
}

function toCollection() {
    location.href = "collection.html";
}

function toIndex() {
    location.href = "index.html";
}

function toNewArrivals() {
    location.href = "newArrivals.html";
}

function toPromos() {
    location.href = "promos.html";
}

function toLogin() {
    location.href = "login.html";
}

function toRegistro() {
    location.href = "registrate.html";
}

function toVinyls() {
    location.href = "vinyls.html";
}
*/
function toAPI() {
    let log = localStorage.getItem("logueado");

    if (localStorage.getItem('logueado') === 'true')
        window.location.href = "/playlist";
    else {
        alert("Debe iniciar sesión para entrar");
        window.location.href = "/login";
    }
}
