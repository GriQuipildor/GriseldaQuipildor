function cambiarColor(){
    document.getElementById("texto1").style.color = "red";
}
function mostrarColor(){
    var colores = document.getElementById("colores").value;
    alert(colores);
}
function mostrarNum(){
    var numeros = document.getElementById("numeros").value;
    alert(numeros);
}
function mensaje(){
    var textarea = document.getElementById("textarea").value;
    alert(textarea);
}
function sumar(){
    var valor1 = document.getElementsByName("valor1")[0].value;
    var valor2 = document.getElementsByName("valor2")[0].value;
    if (valor1 == ""){ 
        alert("Ingrese un número en el campo 1");
    } else if (valor2 == ""){
        alert("Ingrese un número en el campo 2")     
    } else if (isNaN(valor1) || isNaN(valor2)){
        // si entro aqui verifico que al menos un valor ingresado no es un numero
        // por lo tanto lo sumo como si fuera string
        var resultado = (valor1) + (valor2);
        document.getElementsByName("resultado")[0].value = resultado;
    } else  {           
        var resultado = Number(valor1) + Number(valor2);
        document.getElementsByName("resultado")[0].value = resultado;
    } 
}
function divColor(){
    document.getElementById("div").style.color = "#c53550";
    document.getElementById("div").style.backgroundColor = "#6ed8c4";
}
divColor();
