var fondo = document.getElementById("vid");
var sound = document.getElementById("aud");
function playPause() {
    if(fondo.paused)
          fondo.play();
          else
          fondo.pause();
    if(sound.paused)
          sound.play();
          else
          sound.pause();
}