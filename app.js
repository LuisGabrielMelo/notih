var formulario =document.getElementById('formulario');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('me diste un click')

    var dat= new FormData(formulario)
    console.log(data)
})