document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('.temas-panel').addEventListener('click', function() {
    var panel = document.querySelector('.panelTemas');
    panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
  });
  document.querySelector('.nosotros-panel').addEventListener('click', function() {
    var panel = document.querySelector('.panelNosotros');
    panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
  });

  function borrarDatos() {
    document.getElementById("user").value = "";
    document.getElementById("pass").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("app").value = "";
    document.getElementById("apm").value = "";
    document.getElementById("correo").value = "";
  }

  // Mostrar la contraseña a la hora de ingresarla
  let pwd = document.getElementById('pass');
  let chk = document.getElementById('chk');

  chk.onchange = function(e) {
    pwd.type = chk.checked ? "text" : "password";
  };

  // Condiciones a la hora de ingresar el correo, usuario y contraseña para que sean válidos
  const email = document.getElementById("correo");
  const password = document.getElementById("pass");
  const form = document.getElementById("form");
  const parrafo = document.getElementById("warnings");
  const names = document.getElementById("user");

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    let entrar = false;
    const texto = document.getElementById("texto");

    // Eliminar los elementos <p> anteriores
    while (texto.firstChild) {
      texto.removeChild(texto.firstChild);
    }

    let acces = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (names.value.length < 6) {
      var p = document.createElement("p");
      p.textContent = "El usuario es demasiado corto";
      texto.appendChild(p);
      entrar = true;
    }

    if (!acces.test(email.value)) {
      var p1 = document.createElement("p");
      p1.textContent = "El email no es válido";
      texto.appendChild(p1);
      entrar = true;
    }

    if (password.value.length < 8) {
      var p2 = document.createElement("p");
      p2.textContent = "La contraseña no es válida, es muy corta";
      texto.appendChild(p2);
      entrar = true;
    }

    // Si todo está correcto, continuar con el proceso aquí
    if (!entrar) {
      // Aquí puedes continuar con el proceso, por ejemplo, enviar el formulario.
      alert('Bienvenido a Diseño Puro :)');
      window.open('', '_self');
    }
  });
});
