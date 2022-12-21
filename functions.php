<?php
 $serverName = "localhost";
 $userName ="root";
 $password = "";
 $dbname = "Clinic";
 $link = new mysqli($serverName, $userName, $password, $dbname);
 if ($link->connect_error) {
     echo "Ошибка: " . $link->connect_error;
 } else {
    //  echo "Подключение успешно";
 }
function addDoctor($firstname, $lastname, $position) {
    global $link;
    return mysqli_query($link, "INSERT INTO `doctors` (`firstname`, `lastname`, `position`) VALUES ('$firstname', '$lastname', '$position')");
}
function addClient($firstname, $lastname) {
    global $link;
    return mysqli_query($link, "INSERT INTO `customers` (`firstname`, `lastname`) VALUES ('$firstname', '$lastname')");
}
function getOrders() {
    global $link;
    $orders= mysqli_query($link, "SELECT orders.paid, orders.comment, orders.data_added, customers.firstname as cname, customers.lastname as clastname, doctors.firstname as dname, doctors.lastname as dlastname FROM orders left join customers ON orders.client_id = customers.id left join doctors on orders.doctor_id = doctors.id;");
    return $orders->fetch_all(MYSQLI_ASSOC);   
}
function getDoctors() {
    global $link;
    $queryDoctors = mysqli_query ($link ,"SELECT firstname, lastname, id, position FROM doctors");
    return $queryDoctors->fetch_all(MYSQLI_ASSOC);
}
function getDoctor($id) {
    global $link;
    $queryDoctors = mysqli_query ($link ,"SELECT * FROM doctors WHERE id = '$id'");
    return mysqli_fetch_assoc($queryDoctors);
}
function getClients() {
    global $link;
    $queryClients = mysqli_query ($link ,"SELECT * FROM customers");
    return $queryClients->fetch_all(MYSQLI_ASSOC);
}
?>