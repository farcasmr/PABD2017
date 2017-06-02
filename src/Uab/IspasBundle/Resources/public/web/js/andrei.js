$( document ).ready(function() {
var image =  document.getElementById('profil');

function mouseOver() {
    image.style.height="600px";
}

image.onclick = mouseOver;
});