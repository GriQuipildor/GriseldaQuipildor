var contenido = document.querySelector("#contenido")
function traer(){
    fetch("https://randomuser.me/api/")
    .then(res => res.json())
    .then(function(data){
        // console.log("muestro resultado=>",data.results[0].location.coordinates.latitude)
        contenido.innerHTML = "Datos usuario: <br>"
        contenido.innerHTML += "<img src='"+data.results[0].picture.large+"'><br><br>"
        contenido.innerHTML += "<p>Nombre: "+data.results[0].name.first
        contenido.innerHTML += "<p>Correo electronico: "+data.results[0].email
        contenido.innerHTML += "<p>Latitud: "+data.results[0].location.coordinates.latitude
        contenido.innerHTML += "<p>Longitud: "+data.results[0].location.coordinates.longitude
    })
}
// "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

// const tilesProvider = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
// let myMap = L.maps('myMaps').setView([51.505, -0.09], 13)

function mostrarMapa(){
    var tilesProvider = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
    let myMap = L.map('myMaps').setView([-32.9980772,-58.5201163], 13);

    L.tileLayer(tilesProvider, {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
   
  
    }).addTo(myMap);
    var marker = L.marker([-32.9980772,-58.5201163]).addTo(myMap);
//let myMap = L.maps('myMaps').setView([51.505, -0.09], 13)
}