<?php 

function Validar($notas)
{
    $esvalido = true;
    for ($i=0; $i  < count($notas); $i++) { 
        if(!is_numeric($notas[$i]) || empty($notas[$i]) || $notas[$i] < 1 || $notas[$i] > 10 || is_nan($notas[$i]) || is_null($notas[$i]))
    {
       $esvalido = false;
    }
}
    if ($esvalido == false) {
        echo '<p> Ingresaste las notas de forma incorrecta, por favor ingresarlas nuevamente </p>';
    }
    
   
    return $esvalido;
}
?>