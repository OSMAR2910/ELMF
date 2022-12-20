var fondo = document.getElementById("vid");
var sound = document.getElementById("aud");
function playPause() {
    if(sound.paused)
          sound.play();
          else
          sound.pause();
    if(fondo.paused)
          fondo.play();
          else
          fondo.pause();
          
}