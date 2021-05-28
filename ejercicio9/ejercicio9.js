// Punto 1: Imprimir el array en HTML
var nombres = ["Anibal", "Oscar", "Ramon", "Cecilia", "Mariano", "Antonio"];
// length obtiene la longitud del array
for (i=0; i<nombres.length; i++){
   document.getElementById("nombres").innerHTML += '<li>' + nombres[i] + '</li>';
}

// Punto 2:Que Cecilia aparezca antes que Ramon
var aux = nombres[3];
nombres[3] = nombres[2];
nombres[2] = aux;
for (i=0; i<nombres.length; i++){
    document.getElementById("nombresIntercambio").innerHTML += '<li>' + nombres[i] + '</li>';
}

// Punto 3: Despues de Anibal y antes de Oscar, que aparezcan 2 nuevos: Roberto y Amalia.
nombres.splice(1, 0, "Roberto", "Amalia");
for (i=0; i<nombres.length; i++){
    document.getElementById("nombresNuevos").innerHTML += '<li>' + nombres[i] + '</li>';
}

// Punto 4:Agregar a Marta al principio. 
nombres.unshift("Marta");
for (i=0; i<nombres.length; i++){
    document.getElementById("nombresAgregar").innerHTML += '<li>' + nombres[i] + '</li>';
}

// Punto 5: Mostrar el array ordenado de la A a la Z.
nombres.sort();
for (i=0; i<nombres.length; i++){
    document.getElementById("nombresOrd1").innerHTML += '<li>' + nombres[i] + '</li>';
}

// Punto 6:Mostrar el array ordenado de la Z a la A.

// nombres.reverse();
// for (i=0; i<nombres.length; i++){
//   document.getElementById("nombresOrd2").innerHTML += '<li>' + nombres[i] + '</li>';
// }

function ordenarZaA(a, b){
    if(a > b){
        return -1;
    } else {
        return 1;
    }
}
nombres.sort(ordenarZaA);
for (i=0; i<nombres.length; i++){
  document.getElementById("nombresOrd2").innerHTML += '<li>' + nombres[i] + '</li>';
}