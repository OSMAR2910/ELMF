var Fondo = document.getElementById("vid");
function playPause() {
    if(Fondo.paused)
          Fondo.play();
          else
          Fondo.pause();
}

var backSound = document.getElementById("aud");
function playPause() {
    if(backSound.paused)
          backSound.play();
          else
          backSound.pause();
}