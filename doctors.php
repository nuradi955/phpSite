<?php
  // $serverName = "localhost";
  // $userName ="root";
  // $password = "";
  // $dbname = "Clinic";
  // $link =  new mysqli ($serverName, $userName, $password, $dbname);

  // if ($link ->connect_error) {
  //   echo "Ошибка: " . $link->connect_error;
  // } else {
  //   // echo "Подключение успешно";
  // };

  // $queryDoctors = mysqli_query ($link ,"SELECT firstname, lastname, id, position FROM doctors");
  require "functions.php";
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="sait.css"> 
    <title>Врачи</title>
  </head>
  <body>
    <div class="container">
      <?php include 'components/header.php'
      ?>
        <ul class="list-group">
            <?php
            $doctor = getDoctors();
            $i=0;
              while ($i < count($doctor) - 1) {
                $i++;
                $id=$doctor[$i]['id'];
                echo "<a href=doc.php/?id=$id class='list-group-item'>" . $doctor[$i]['firstname'] . " " . $doctor[$i]['lastname'] . "-" . $doctor[$i]['position'] . "</a>";
              }              
             

            
            ?>
        </ul>
    </div>  
  </body>
</html>