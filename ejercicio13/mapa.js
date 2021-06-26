let mapaCreado = false; //Inicio en "false" porque el mapa todavia no se creo, uso esta variable para que el mapa se cree solo una vez
let miMapa = '';
let marker = '';
 
function cargarMapa(){
    let latitud = document.getElementById("lat").value;
    let longitud = document.getElementById("long").value;   
    mostrarMapa(latitud, longitud); //Paso estos valores como parametros para usar en la siguiente funcion
}
function mostrarMapa(latitud, longitud){
    if(!mapaCreado){
        let tilesProvider = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";
        miMapa = L.map('mapa');
        L.tileLayer(tilesProvider, {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
        }).addTo(miMapa);
        mapaCreado = true; //Lo pongo en "true" porque el mapa ya se creo y no se vuelve a crear
    }else{
        miMapa.removeLayer(marker);  //elimina el marcador anterior
    }
    miMapa.setView([latitud, longitud], 18); //situa la ubicacion en el mapa
    marker = L.marker([latitud, longitud]).addTo(miMapa); //muestra el marcador
}