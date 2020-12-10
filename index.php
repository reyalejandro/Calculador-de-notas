<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include('helpers.php'); ?>
    <h1 class="title">Calculador de notas!!</h1> <br>
   
    <div class="container">
      <div class="row">
        <div class="col-md-11">
          <form id="form" action="resultados.php" method="POST" onsubmit="return ValidarNotas()">
            <div class="form-group">
              <p class="nombremateria" for="Matem">Nota de matemática:</p>
              <input type="number" class="form-control" id="Matem" placeholder="Ingresa un número" name="matem" min="1" max="10">
            </div>
            <div class="form-group">
              <p class="nombremateria" for="Leng">Nota de Lengua:</p>
              <input type="number" class="form-control" id="Leng" placeholder="Ingresa un número"name="leng" min="1" max="10">
            </div>
            <div class="form-group">
                <p class="nombremateria" for="Ing">Nota de Inglés:</p>
                <input type="number" class="form-control" id="Ing" placeholder="Ingresa un número" name="ing" min="1" max="10">
              </div>
            <div id ="divAlerta">

            </div>
            <button id="button" type="submit" class="btn btn-primary btn-dark" name="submit"><h5 class="btnespecial">Enviar</h5></button>  
          </form>
        </div>
      </div>
    </div>
   

<script src="validate-submit.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>



