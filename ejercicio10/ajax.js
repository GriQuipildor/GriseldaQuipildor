function cargaProv(){
    var pais = document.getElementById("pais").value;
    ajax(pais);
}

function ajax(pais){
    var envioAjax = new XMLHttpRequest();
    envioAjax.onreadystatechange = function(){
        // Si se cumplen estas dos condiciones mi solucitud fue exitosa
        if(this.readyState == 4 && this.status == 200){
            var json = JSON.parse(this.responseText);
            // Elimina las provincias al cambiar de pais
            var provincias = document.getElementById("provincias");
            provincias.length=0; 	

            for (var i = 0; i < json.length; i++){
                var option=document.createElement("option");
                option.value=json[i];
                option.text=json[i]; 
                provincias.appendChild(option);
            }
        }
    }
    // Ejecuto el metodo
    envioAjax.open("GET", "provincias.php?pais="+pais, true);
    envioAjax.send();
}