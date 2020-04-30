<?php
$servername="localhost";
$username="user";
$password="";

$conn = new mysqli($servername, $username, $password);
    if($conn->connect_error) {
        die("Connection failed: ".$conn->connect_error);
    }
$sql="CREATE DATABASE practice";
if($conn->query($sql)===TRUE) {
    echo "Database created successfully"; }
    else {
        echo "Error" . $conn->error;
}
//$h = "QqWwEeRrTtYyUuIiOoPpAaSsDdFfGgHhJjKkLlZzXxCcVvBbNnMm1234567890";
//$rand = substr(str_shuffle($h), 0, 10);
//$url = html entities($_POST['url']);
//if ($_POST['submit']) {}
?>