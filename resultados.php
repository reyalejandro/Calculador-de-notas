<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EFSI - TP7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('helpers.php');   
    
    if(Validar($notas))  {?>
    <h1 class="title">Entonces...</h1>
    <h3 class="subtitulo"> Las notas del alumno son:</h3> <br>
    <?php
    echo '<p> Matemática: ',$notas[0], '</p>','<br>';
    echo '<p> Lengua: ',$notas[1], '</p>', '<br>';
    echo '<p> Inglés: ',$notas[2], '</p>','<br> <br>';?>
    <h3 class="subtitulo">Sobre las materias:</h3> <br>
    <?php
        echo NotaBaja($notas,$materias);
        echo PromedioNotas($notas);
        echo PromedioNotasNoBajas($notas);
        echo NotaMasAlta($notas,$materias);
        echo NotaMasBaja($notas,$materias);
    }?>
    
<a href="index.php"><button id="boton" type="submit" class="btn btn-primary btn-dark" name="submit">
    <h3 class="btnespecial">Otra vez!!!</h3></button></a>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


