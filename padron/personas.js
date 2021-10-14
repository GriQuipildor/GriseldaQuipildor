let formulario = document.getElementById("personaForm") 
//addEventListener detecto lo que se envia por submit
formulario.addEventListener("submit", function(e){
    //e.prevent.. cancela el evento, sin detener el resto del funcionamiento del evento, es decir, puede ser llamado de nuevo.
    e.preventDefault();
    let datos = new FormData(personaForm);
    
    fetch("personas.php",{
        method: "POST",
        body:datos
    })
    .then(res => res.json())
        .then(data => {
            if (data === null) {
                document.getElementById('tablaResultado').style.display = 'none';
                alert("No se ha encontrado ningún resultado con los datos ingresados. Intente nuevamente");
            }else{
            //console.log(data);
                document.getElementById('tablaResultado').style.display = 'inline-block';
                document.getElementById('nombreColegio').innerText = data.nombre;
                document.getElementById('direccionColegio').innerText = data.direccion;
                document.getElementById('numeroColegio').innerText = data.numero;
            }
        })
})