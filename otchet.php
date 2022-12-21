<?php
  require "functions.php";  
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
    <title>Отчет</title>
  </head>
  <body>
    <div class="container">
        <?php include 'components/header.php' ?>
        <div class="mx-auto mb-5 mt-5" style="width: 200px;">
          <h2 >ОТЧЕТ</h2>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Клиент</th>
                <th scope="col">Доктор</th>
                <th scope="col">Цена</th>
                <th scope="col">Комментарий</th>
                <th scope="col">Дата</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $i=0;
                $row = getOrders();
                while ($i < count($row)) {
                  echo  '<tr>
                          <th scope="row">' . ($i + 1) . '</th>' .
                          '<td>' . $row[$i]['cname'] . ' ' . $row[$i]['clastname'] . '</td>' .
                          '<td>' . $row[$i]['dname'] . ' ' . $row[$i]['dlastname'] . '</td>' .
                          '<td>' . $row[$i]['paid'] . '</td>' .
                          '<td>' . $row[$i]['comment'] . '</td>' .
                          '<td>' . $row[$i]['data_added'] . '</td>' .
                        '</tr>';
                  $i++;
                }
              ?>
            </tbody>
        </table>
    </div>  
  </body>
</html>