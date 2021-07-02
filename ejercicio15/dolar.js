// function mostrarDolarOficial(){
//     fetch("https://api-dolar-argentina.herokuapp.com/api/dolaroficial")
//     .then(res => res.json())
//     .then(data => {
//         console.log(data)
//     })
    
// }


function mostrarDolarBlue(){
    var url = "https://api-dolar-argentina.herokuapp.com/api/dolarblue";
  $.getJSON( url)
    .done(function( data ) {
        console.log(data)
      });
console.log("hola")
}