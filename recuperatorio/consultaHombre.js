let formularioH = document.getElementById("dniH")
//console.log(formularioMujer)
formularioH.addEventListener("submit", function(e){
    e.preventDefault();
    let datos = new FormData(dniH);

    fetch("hombre.php", {
        method: "POST",
        body: datos
    })
    .then(res => res.json())
    .then(data => {
        // console.log(data);
        if (data === null){
            alert("No se encuentra el DNI ingresado. Intente Nuevamente");
        }else{
            document.getElementById("nombreH").innerText = data.nombre;
            document.getElementById("apellidoH").innerText = data.apellido;
        }
    })
})