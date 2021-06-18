var formulario = document.getElementById("formulario");
var resp = document.getElementById("resp");

// addEventListener detecto lo que se envia por submit
formulario.addEventListener("submit", function(e){
    // Evita que se ejecute lo que viene por defecto en el navegador
    e.preventDefault();
    // nueva informacion de formulario
    var datos = new FormData(formulario);

    // Fetch recibe como primer parametro la url, metodo, datos del formulario 
    fetch("post.php",{
        method: "POST",
        body:datos
    })
    // Promesas con .then, recibe una respuesta en formato json, y en el siguiente llegan los datos
        .then(res => res.json())
        .then(data => {
            if(data === "Complete los campos"){
                resp.innerHTML = "Completa todos los campos"
            }else{
                resp.innerHTML = "<br><b>Datos ingresados:<b><br>"+ data;
            }
        })
})
