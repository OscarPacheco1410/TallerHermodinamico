function soloNum(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toString();
  letras = ".-0123456789"; //Se define todo el abecedario que se quiere que se muestre.
  especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.
  tecla_especial = false
  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    swal("¡Oops!. Solo escribe números enteros o decimales", "Click en aceptar para continuar", "error", {
      button: "Aceptar",
      timer: 4000,
    });
    return false;
  }
}

var input = document.getElementById('numeros');
input.addEventListener('input', function() {
  if (this.value.length > 10)
    this.value = this.value.slice(1, 10);
})