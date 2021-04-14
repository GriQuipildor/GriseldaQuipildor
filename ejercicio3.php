<!DOCTYPE html>
<html>
<head>


</head>
<body>
    Seleccione un número:
    <select>
        <?php
            for ($i=1; $i <= 10 ; $i++) { 
                echo '<option value="'. $i .'">'. $i. '</option>';
            } 
        ?>
    </select>  
</body>
</html>