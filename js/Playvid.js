var Fondo = document.getElementsByClassName("vid");
function playPause() {
    if(Fondo.paused)
          Fondo.play();
          else
          Fondo.pause();
}

var backSound = document.getElementsByClassName("aud");
function playPause() {
    if(backSound.paused)
          backSound.play();
          else
          backSound.pause();
}