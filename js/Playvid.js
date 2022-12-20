var fondo = document.getElementById("vid");
function playPause() {
    if(fondo.paused)
          fondo.play();
          else
          fondo.pause();
}

var backSound = document.getElementById("aud");
function playPause() {
    if(backSound.paused)
          backSound.play();
          else
          backSound.pause();
}