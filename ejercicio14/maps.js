let contenido = document.querySelector("#contenido");
let mapaCreado = false; //Inicio en "false" porque el mapa todavia no se creo, uso esta variable para que el mapa se cree solo una vez
let mapa = '';
let marker = '';

function traer(){
    fetch("https://randomuser.me/api/")
    .then(res => res.json())
    .then(function(data){
        let latitud = data.results[0].location.coordinates.latitude;
        let longitud = data.results[0].location.coordinates.longitude;
        contenido.innerHTML = "Datos usuario: <br>"
        contenido.innerHTML += "<img src='"+data.results[0].picture.large+"'><br><br>"
        contenido.innerHTML += "<p>Nombre: "+data.results[0].name.first
        contenido.innerHTML += "<p>Correo electronico: "+data.results[0].email
        contenido.innerHTML += "<p>Latitud: "+latitud
        contenido.innerHTML += "<p>Longitud: "+longitud
        mostrarMapa(latitud, longitud); //Paso estos valores como parametros para usar en la siguiente funcion
    })
}

function mostrarMapa(latitud, longitud){
    if(!mapaCreado){
        let tilesProvider = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
        //"L" libreria de Leaflet y map es el metodo que va a crear el mapa que esta en el html
        mapa = L.map('mapa');
        L.tileLayer(tilesProvider, {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
        }).addTo(mapa);
        mapaCreado = true; //Lo pongo en "true" porque el mapa ya se creo y no se vuelve a crear
    }else{
        mapa.removeLayer(marker);   //elimina el marcador anterior
    }
    mapa.setView([latitud,longitud], 8); //situa la ubicacion en el mapa
    marker = L.marker([latitud,longitud]).addTo(mapa);//muestra el marcador
}