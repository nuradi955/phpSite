<?php
  $serverName = "localhost";
  $userName ="root";
  $password = "";
  $dbname = "Clinic";
  
  $conn =  mysqli_connect($serverName, $userName, $password, $dbname);

  $queryDoctors = mysqli_query ($conn,"SELECT firstname, lastname, id FROM doctors");
  $queryClients = mysqli_query ($conn,"SELECT firstname, lastname, id FROM customers");

  if (isset($_POST['doctor_id']) && isset($_POST['customer_id']) && isset($_POST['price']) && isset($_POST['comment'])) {
    $comment = $_POST['comment'] ?? NULL;
    $doc = $_POST['doctor_id'];
    $cus = $_POST['customer_id'];
    $paid = $_POST['price'];

    $newOrder = "INSERT INTO orders (doctor_id, client_id, paid, comment, data_added) VALUES ('$doc', '$cus', '$paid', '$comment', now())";

    if (mysqli_query($conn, $newOrder)) {
      echo 'Данные успешно добавлены';
    } else {
      echo 'Произошла ошибка: ' . mysqli_error($conn) . '<br>';
    }
  }

  $conn->close();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <?php include 'components/header.php' ?>
      <form method="post">
        <select name='doctor_id'  id="#" aria-placeholder="Выберите врача" >
          <option  value="">Выберите врача</option>
          <?php 
            while ($doctor = mysqli_fetch_array($queryDoctors)) {
              echo "<option  value=" . $doctor['id']. ">" . $doctor['firstname'] . " " . $doctor['lastname'] . "</option>";
            }
          ?>
        </select>
        <select name='customer_id' id="#" placeholder="Выберите клиента" >
          <option  >Выберите клиента</option>
          <?php 
            while ($client = mysqli_fetch_array($queryClients)) {
              echo "<option  value=" . $client['id'] . ">" . $client['firstname'] . " " . $client['lastname'] . "</option>";
            }
          ?>
        </select>
        <input name="price" class="input-group mb-3 form-control" type="number" placeholder="Цена">
        <textarea name="comment" placeholder="Примечание"></textarea>
        <input class="btn btn-primary" type="submit" value="Отправить">
      </form>
    </div>  
  </body>
</html>