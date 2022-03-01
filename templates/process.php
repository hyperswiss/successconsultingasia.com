<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="../img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="manifest" href="../img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>SCS - Thank you</title>
    <meta name="description" content="Asia hospitality consultants">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../static/common.css">
    <link rel="stylesheet" href="../static/subpages.css">
</head>
<body>

    
<?php include 'navbar.html'; ?>

<section class="main">

    <div class="cont">   
        <img src="../img/SCS logo.png" class="logo-top" alt="logo">
        <h1>Thank you</h1>
        <h2>Your email has been successfully sent to us<br>with the following details</h2>

        <div class="email-details">
            <div class="label">
                <h2>Name : <br>Phone number :<br>Email : <br>Subject : <br>Message : </h2>
            </div>
            <div class="details">
                <h2>
                <?php 

                $servername = "localhost";
                $username = "php";
                $password = "";
                $dbase = "contactsDB";

                if(isset($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
                    $fname = htmlspecialchars($_POST["fname"]);
                    $lname = htmlspecialchars($_POST["lname"]);
                    $phone = htmlspecialchars($_POST["phone"]);
                    $email = htmlspecialchars($_POST["email"]);
                    $subject = htmlspecialchars($_POST["subject"]);
                    $message = htmlspecialchars($_POST["message"]);
                    echo $fname . " " . $lname . "<br>", $phone . "<br>", $email . "<br>", $subject . "<br>", $message; }

                //connect to mysql server
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbase", $username, $password);
                    //set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected";
                }   catch(PDOException $e) {
                    echo "Connection failed " . $e->getMessage(); 
                }

                if(isset($_POST['submit'])) {
                    $fname = htmlspecialchars($_POST["fname"]);
                    $lname = htmlspecialchars($_POST["lname"]);
                    $phone = htmlspecialchars($_POST["phone"]);
                    $email = htmlspecialchars($_POST["email"]);
                    $subject = htmlspecialchars($_POST["subject"]);
                    $message = htmlspecialchars($_POST["message"]);
                    //include prepared statement
                    $sql = "INSERT INTO contacts_table (fname, lname, phone, email, subject, message)
                    VALUES (:fname, :lname, :phone, :email, :subject, :message)";
                    //prepare statement
                    $stmt = $conn->prepare($sql);
                    //bind input variables into the prepared statement
                    $stmt->bindParam(':fname', $fname);
                    $stmt->bindParam(':lname', $lname);
                    $stmt->bindParam(':phone', $phone);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':subject', $subject);
                    $stmt->bindParam(':message', $message);
                    
                    //execute statement
                    $stmt->execute();
                }
                ?>

                </h2>
            </div>
        </div>
        <h2>Expect to hear from us very soon</h2>

        <?php include 'sendmail.php'; ?>

    </div>

</section>
</body>