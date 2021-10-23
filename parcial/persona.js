let formulario = document.getElementById("dniForm")
    //console.log(formulario)
formulario.addEventListener("submit", function(e){
   e.preventDefault();
    let datos = new FormData(dniForm);

    fetch("persona.php",{
        method: "POST",
        body:datos
    })
    .then(res => res.json())
    .then(data => {
        if (data === null){
            alert("No se encuentra el DNI ingresado. Intente Nuevamente");
        }else{
            document.getElementById("nombre").innerText = data.nombre;
            document.getElementById("apellido").innerText = data.apellido;
            document.getElementById("edad").innerText = data.fec_nac;
            
        }
    })
})