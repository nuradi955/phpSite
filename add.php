<?php
    require "functions.php";
    if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['position'])) {
        addDoctor($_GET['firstname'], $_GET['lastname'], $_GET['position']);
    }
    
   
    
?>        
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="sait.css"> 
        <title>ДОБАВИТЬ</title>
    </head>
    <body>
        <div class="container">
            <?php include 'components/header.php'
            ?>
            <form action="" method="GET">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="firstname" placeholder="Имя">
                    <label for="floatingInput">Имя врача</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="lastname" placeholder="Фамилия">
                    <label for="floatingPassword">Фамилия врача</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="position" placeholder="Специализация">
                    <label for="floatingPassword">Специализация</label>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary mt-3 float-right" >ДОБАВИТЬ</button>
                </div>                
            </form> 
        </div>                 
    </body>
</html>