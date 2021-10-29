let formularioMujer = document.getElementById("dniMujer")
//console.log(formularioMujer)
formularioMujer.addEventListener("submit", function(e){
    e.preventDefault();
    let datos = new FormData(dniMujer);

    fetch("mujer.php", {
        method: "POST",
        body: datos
    })
    .then(res => res.json())
    .then(data => {
        // console.log(data);
        if (data === null){
            alert("No se encuentra el DNI ingresado. Intente Nuevamente");
        }else{
            document.getElementById("nombre").innerText = data.nombre;
            document.getElementById("apellido").innerText = data.apellido;
        }
    })
})