<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "cake";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["sent"])) {
    $nameC = $_POST["name"];
    $emailC = $_POST["email"];
    $msgC = $_POST["msg"];

    $sqlC = "INSERT INTO `comment`( `name`, `email`, `msg`) VALUES ('$nameC','$emailC','$msgC')";
   $result= mysqli_query($conn, $sqlC);
   if($result>0){
    echo"<script>alert('ok')</script>";
   }else{
    echo"error";
   }

   header("Location: review.php");
}
?>