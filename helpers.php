<?php
include('validations.php'); 
if(isset($_POST['submit']))
{
    $materias = array('matemática','lengua','inglés');
    $notas = array($_POST['matem'],$_POST['leng'],$_POST['ing']);
}

function NotaMasAlta($notas,$materias)
{
    echo '<p> La materia mas alta es ',$materias[array_search(max($notas),$notas)] ,'. </p> <br>' ;
}


function NotaMasBaja($notas,$materias)
{
    echo '<p> La materia mas baja es ',$materias[array_search(min($notas),$notas)] ,' </p> <br>' ;
}


function PromedioNotasNoBajas($notas)
{
    for ($i=0; $i < count($notas) ; $i++) { 
    if($notas[$i] <= 5) 
    { 
        unset($notas[$i]);
    }
   
}
error_reporting(0);
if(ValidaMayor5($notas))
    {

    }else
    if (!is_nan(array_sum($notas) / count($notas))) #Si esto da 0 igual aparece el msg
    { 
    echo '<p> El promedio de notas sin contar las bajas es: ', array_sum($notas) / count($notas) , '</p> <br>';
    } 
}


function PromedioNotas($notas)
{
    echo '<p> El promedio de notas es: ', array_sum($notas) / count($notas), '</p> <br>';
}


function NotaBaja($notas, $materias)
{
    if(ValidaMayor5($notas))
    {
        echo '<p> El alumno no tiene materias bajas </p> <br>';
    } 
    for ($i=0; $i <count($notas); $i++) {
    if ($notas[$i] <= 5)
     echo '<p> La materia ', $materias[$i] ,' quedó baja. </p> <br>';  
    }
}

function ValidaMayor5($notas)
{
    $value = true;

    if($notas[0] > 5 && $notas[1] > 5 && $notas[2] > 5)
    {
    } else $value = false;
    return $value;
}


?>