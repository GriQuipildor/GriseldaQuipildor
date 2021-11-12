<?php

trait Funciones{
    function calculoEdad($edadProf, $edadAlum){
        $difEdad = $edadProf - $edadAlum;
        echo 'Diferencia de edad: '.$difEdad;
    }

    function comparacionMateria($materiaProf, $materiaAlumno){
        if ($materiaProf == $materiaAlumno) {
            echo 'Las materias son iguales, la de profesor es: '.$materiaProf.' y la del alumno es: '.$materiaAlumno;
        }else{
            echo 'Las materias son diferentes. <br> La del profesor es: '.$materiaProf.' y la del alumno '.$materiaAlumno;
        }
    }
    function anioNac($edadProfesor, $edadAlumno){
    $anioActual = date('Y');

    $anioProf = $anioActual - $edadProfesor;
    echo '<br>Año de nacimiento de profesor: '.$anioProf;


    $anioAlum = $anioActual -$edadAlumno;
    echo '<br>Año de nacimiento de alumno: '.$anioAlum;
    }

}

?>