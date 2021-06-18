var contenido = document.querySelector("#contenido")
function traer(){
    fetch("https://randomuser.me/api/")
    .then(res => res.json())
    .then(function(data){
        console.log(data.results[0].email)
        contenido.innerHTML = "Datos usuario: <br>"
        contenido.innerHTML += "<img src='"+data.results["0"].picture.large+"'><br><br>"
        contenido.innerHTML += "<p>Nombre: "+data.results["0"].name.first
        contenido.innerHTML += "<p>Correo electronico: "+data.results["0"].email
    })
}