<?php
require_once 'Persona.php';
require_once 'Profesor.php';
require_once 'Alumno.php';
// var_dump($_POST);

    $nombreP = $_POST["nombreP"];
    $apellidoP = $_POST["apellidoP"];
    $dniP = $_POST["dniP"];
    $carreraP = $_POST["carreraP"];
    $materiaP = $_POST["materiaP"];
    $edadP = $_POST["edadP"];

    $nombreA = $_POST["nombreA"];
    $apellidoA = $_POST["apellidoA"];
    $materiaA = $_POST["materiaA"];
    $edadA = $_POST["edadA"];

// aqui uso los datos que me llegan del usuario pero despues uso los datos desde el OBJETO
// busco las variables desde el objeto Persona-->ir a la class para poder usarlo
    $profesor = new Profesor($nombreP, $apellidoP, $edadP);
    $profesor->DatosProf($dniP, $carreraP, $materiaP);

    // echo 'El DNI del profesor es: '.$profesor->dni;
    // $profesor->dni = $dniP;
    // var_dump($profesor);
    echo "Profesor: <br>";
    $profesor->nombreCompl();    

    $alumno = new Alumno($nombreA, $apellidoA, $edadA);
    $alumno->materia = $materiaA;
    echo "Alumno: <br>";
    $alumno->nombreCompl(); 
    //obtengo las edades a traves del get_edad anteponiendo de quien quiero obtener
    // $difEdad = $profesor->get_edad() - $alumno->get_edad();
    // echo 'Diferencia de edad: '.$difEdad;


    // if ($profesor->materia == $alumno->materia) {
    //     echo 'Las materia son iguales, la de profesor es: '.$profesor->materia.' y la del alumno es: '.$alumno->materia;
    // }else{
    //     echo 'Las materias son diferentes. <br> La del profesor es: '.$profesor->materia.' y la del alumno '.$alumno->materia;
    // }
    
    //punto 4: año de  nacimiento profesor y alumno
    // $anioActual = date('Y');
    // $edadProf =$profesor->get_edad();

    // $anioProf = $anioActual - $edadProf;
    // echo '<br>Año de nacimiento de profesor: '.$anioProf;

    // $alumno->edad = $edadA; no es necesario porque ya en el objeto tengo la edad alumno

    // $anioAlum = $anioActual - $alumno->edad;
    // echo '<br>Año de nacimiento de alumno: '.$anioAlum;

            //var_dump para saber de donde obtengo la edad en esta funcion, en este caso lo obtuve de Persona.php
    // var_dump($profesor->get_edad());
    $profesor->calculoEdad($profesor->get_edad(), $alumno->get_edad());
    echo '<br>';
    $profesor->comparacionMateria($profesor->materia, $alumno->materia);

    $profesor->anioNac($profesor->get_edad(), $alumno->get_edad());
        // otra variable seria:
        //$profesor->anioNac($profesor->edad, $alumno->edad);
?>