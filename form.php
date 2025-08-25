<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cake";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["create"])) {

    $name = $_POST["name"];
    $telephone = $_POST["phone"];
    $email = $_POST["email"];
    $event = $_POST["event"];
    $amount = $_POST["amount"];
    $flavor = $_POST["flavor"];
    $date = $_POST["date"];
    $msg = $_POST["massege"];

    if (!empty($name) && !empty($telephone) && !empty($email) && !empty($event) && !empty($amount) && !empty($date) && !empty($flavor)) {

        $sql = "INSERT INTO `orders`(`email`, `phoneNo`, `event`, `amount`, `flavor`, `date`,`msg`) VALUES ('$email','$telephone ','$event','$amount','$flavor','$date','$msg')";
        mysqli_query($conn, $sql);
        echo "<script>alert('Order Successfuly Created!')</script>";
        // header("Location:home.html");

    } else {
        echo "<script>alert('Please Fill Details!')</script>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Order Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#FAFAD2 ;
            padding: 20px;
            background-image: url('E:\HNDIT ATI-SLIATE\group project\pic\delic.jpg');
            background-size: cover;
        }

        h2 {
            text-align: center;
            font-size: 40px;
            font-weight: 500px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        select,
        input[type="date"],
        input[type="radio"],
        input[type="checkbox"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <h2>Event Order Form</h2>
    <form action="form.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="phone">Telephone Number:</label><br>
        <input type="tel" id="phone" name="phone"><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="event">Event Type:</label><br>
        <select id="event" name="event">
            <option value="wedding">Wedding</option>
            <option value="party">Party</option>
            <option value="birthday">Birthday</option>
            <option value="anniversary">Anniversary</option>
        </select><br>

        <label for="amount">Amount:</label><br>
        <select id="amount" name="amount">
            <option value="2">2Kg</option>
            <option value="1">1.5Kg</option>
            <option value="1">1Kg</option>
            <option value="1">750g</option>
            <option value="0.5">500g</option>
        </select>
        <!-- <input type="radio" id="2kg" name="amount" value="2kg">2kg
        <input type="radio" id="1kg" name="amount" value="1kg">1kg
        <input type="radio" id="500g" name="amount" value="500g">500g<br> -->

        <label for="flavor">Flavor:</label><br>
        <select id="flavor" name="flavor">
            <option value="chocolate">Chocolate</option>
            <option value="vanilla">Vanilla</option>
            <option value="strawberry">Strawberry</option>
        </select>
        <!-- <input type="checkbox" id="chocolate" name="flavor" value="chocolate">Chocolate
        <input type="checkbox" id="vanilla" name="flavor" value="vanilla">Vanilla
        <input type="checkbox" id="strawberry" name="flavor" value="strawberry">Strawberry<br> -->

        <label for="date">Required Date:</label><br>
        <input type="date" id="date" name="date"><br>
        <label for="date">Any Changes for cake :</label><br>
        <!--<textarea id="date" name="massege"  rows="4" cols="52"></textarea><br>-->

        <input type="text" id="date" name="massege" placeholder="Enter Massege for Seller"><br>

        <input type="submit" value="Submit" name="create">
    </form>
</body>

</html>