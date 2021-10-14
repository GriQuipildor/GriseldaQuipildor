fetch("provincia.php",{
    method: "POST"
})
.then(res => res.json())
    .then(data => {
        let select = document.getElementById('provincia');
        
        // guardo la cantidad de provincias para recorrerlas en el for
        let cantidad = Object.keys(data).length;

        for (var i = 0; i< cantidad; i++){
            // Creo el option con los valores de la provincia
            var opt = document.createElement('option');
            opt.value = data[i].nombre;
            opt.innerHTML = data[i].nombre;
            
            // Inserto el option en el select
            select.appendChild(opt);
        }
    })