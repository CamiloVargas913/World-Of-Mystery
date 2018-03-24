// trae el id de mi section 
var modal = document.getElementById('myModal');

// trae el id boton para llamar modal
var btn = document.getElementById("BtnModal");

// toma el valor de la clase del <span> (x)
var span = document.getElementsByClassName("close")[0];

// al hacer clicks en el boton , abre la ventana modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// al hacer clic en  <span> (x), cierra ventana modal
span.onclick = function() {
    modal.style.display = "none";
}

// si se hace click por fuera del modal, se cierra 
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// si se preciona la tecla esc , se cierra modal
$(document).keyup(function(event){
        if(event.which==27){
            modal.style.display = "none";
        }
});