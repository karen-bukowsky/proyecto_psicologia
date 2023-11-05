document.querySelector('.temas-panel').addEventListener('click', function() {
    var panel = document.querySelector('.panelTemas');
    panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
  });
  document.querySelector('.nosotros-panel').addEventListener('click', function() {
    var panel = document.querySelector('.panelNosotros');
    panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
  });  
  function borrarDatos(){
  let user = document.getElementById("user");
  user.innerHTML=" ";  
  let pass = document.getElementById("pass");
  pass.innerHTML=" ";  
  let nombre = document.getElementById("nombre");
  nombre.innerHTML=" ";  
  let app = document.getElementById("app");
  app.innerHTML=" ";  
  let apm = document.getElementById("apm");
  apm.innerHTML=" ";  
  let correo = document.getElementById("correo");
  correo.innerHTML=" ";  
  }
