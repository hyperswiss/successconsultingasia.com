<?php
$servername = "localhost";
$username = "php";
$password = "";
$emailkh = "cambodia.admin@successconsultingasia.com";
$emailth = "thailand.admin@successconsultingasia.com";

//connect to mysql server
try {
    $conn = new PDO("mysql:host=$servername;dbname=contactsDB", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
}   catch(POOException $e) {
    echo "Connection failed" . $e->getMessage();
}

?>