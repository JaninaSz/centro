/*
var closeButtons = $('.close_window');
closeButtons.on('click', function() {
  $(this).parent().hide();
});
alert("Ingresado "+user);
function validar() {
  var usuario = document.getElementById("user");
  //var usuario = document.getParameterByName("user");
  alert("Ingresado "+usuario);
  if (usuario=="Yiyi"){
    alert("Bienvenid@ " +usuario);
  }else{
    return false;
  }
  }*/

function confirmActa() {
  //Capturar valores de la URL
  const valores = window.location.search;
  //Creamos la instancia
  const urlParams = new URLSearchParams(valores);
  //Accedemos a los valores
  var nMesa = urlParams.get('nMesa');


    /*alert(nMesa);
  alert("asas");
<div class="content">
              <div class="content-text">Para evitar errores, deberá <b>confirmar</b> la mesa seleccionada.
  <p class="p-confirm" id="p-confirm"></p>
                  <div class="content-buttons">
                      <button class="close_window" id="close-button" onclick="continuar()" ;> Continuar</button>
                      <button id="btn-confir" onclick="confirmar()">Confirmar</button>
                      <button class="btn-regresar" onclick="regresar()">Regresar</button>
                  </div>
              </div>
  
          </div> function showTime(){*/
}
function showTime() {
  myDate = new Date();
  hours = myDate.getHours();
  minutes = myDate.getMinutes();
  seconds = myDate.getSeconds();
  if (hours < 10) hours = 0 + hours;
  if (minutes < 10) minutes = "0" + minutes;
  if (seconds < 10) seconds = "0" + seconds;
  let HoraActual = hours + ":" + minutes + ":" + seconds
  //$("#HoraActual").text(hours+ ":" +minutes+ ":" +seconds);
  //setTimeout("showTime()", 1000);
  //console.log(HoraActual +"\nds   " +hours+ ":" +minutes+ ":" +seconds);
  document.getElementById("resul").textContent = "\nEstás por : " + hours + ":" + minutes + ":" + seconds;

  //===
  // INIT
  //===
  updateCountdown();
  // Refresh every second
  setInterval(updateCountdown, seconds);
}