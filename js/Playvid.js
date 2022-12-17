var Fondo = document.getElementsByClassName("vid");
function playPause() {
    if(Fondo.paused)
          Fondo.play();
          else
          Fondo.pause();
}