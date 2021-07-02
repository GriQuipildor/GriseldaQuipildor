function mostrarDolarOficial(){
    fetch("https://api-dolar-argentina.herokuapp.com/api/dolaroficial")
    .then(res => res.json())
    .then(data => {
        console.log(data)
    })
    
}