<?php
$pais = $_GET["pais"];

if ($pais == "argentina") {
    $provincias = ["Buenos Aires","Catamarca","Chaco","Chubut","Córdoba","Corrientes","Entre Ríos","Formosa","Jujuy","La Pampa","La Rioja","Mendoza","Misiones","Neuquén","Rio Negro","Salta","San Juan","San Luis","Santa Cruz","Santa Fe","Santiago del Estero","Tierra del Fuego","Tucumán"];
    echo json_encode($provincias);

} elseif ($pais == "uruguay"){
    $provincias = ["Artigas","Canelones","Cerro Largo","Colonia","Durazno", "Durazno","Florida","Lavalleja","Maldonado","Montevideo","Paysandu","Rio Negro","Rivera","Rocha","Salto","San Jose","Soriano", "Tacuarembo","Treinta y Tres"];
    echo json_encode($provincias);
}