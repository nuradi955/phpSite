<?php
    // $serverName = "localhost";
    // $userName ="root";
    // $password = "";
    // $dbname = "Clinic";

    // $link = new mysqli($serverName, $userName, $password, $dbname);

    // if ($link ->connect_error) {
    //     echo "Ошибка: " . $conn->connect_error;
    // } else {
    // // echo "Подключение успешно";
    // }
    // $queryDoctors = mysqli_query ($link ,"SELECT id, firstname, lastname, position FROM doctors");
    require "functions.php";
    if (isset($_GET)) {
        $id = $_GET['id'];
    }
?>        
<!DOCTYPE html>
<html lang="ru"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"> 
        <title>Личный кабинет</title>
    </head>
    <body>
        <div class="container">
            <?php include 'components/header.php';?>
            <h2 class="container text-center">Личный кабинет врача</h2> 
            <div class="card col-6 m-auto" style="width: 20rem;">
                <div class="card-body ">
                    <?php
                        $doctor= getDoctor($id);
                        echo '<p class="card-text">' . '<strong>' . 'Имя: ' . '</strong>' . $doctor['firstname'] . ' ' . $doctor['lastname'] . '</p>';
                        echo '<p class="card-text">' . '<strong>' . 'Должность: ' . '</strong>' . $doctor['position'] . '</p>';
                    ?>                    
                </div>
            </div>        
        </div>         
    </body>
</html>