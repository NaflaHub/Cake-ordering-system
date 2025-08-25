<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cake";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `comment`";
$result = $conn->query($sql);
// $name=$row["name"];
// $email=$row["email"];
// $msg=$row["msg"];

?>


<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta http -equiva="X-UA- Compatible" contents="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title> cake cravings</title>
    <link rel="stylesheet" href="home.css">
    <!-- Icon Font Stylesheet -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/fav- icon.png" />
    <!--using-font-awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!--poppins-font-family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>

</head>

<body>

    <!-- header section start here -->
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src=image/logo.jpg alt=""></a>
            <h1 class="logoName">cake cravings</h1>
        </div>

        <nav class="navbar">
            <a href="home.html">home</a>
            <a href="category.html">categories</a>
            <a href="review.php">review</a>
            <a href="contact.html">contact</a>
        </nav>
    </header>
    <div id="main">
        <!--Testimonial------------------->
        <section id="testimonials">

            <!--heading---->
            <div class=" testimonial-heading">
                <span>Comments</span>
                <h1>Clients Says</h1>

            </div>
            <!--testimonials-box-container-->
            <div class="testimonials-box-container">
                <!--Box-1----->
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <div class="testimonial-box">
                        <!--top-->
                        <div class="box-top">
                            <!--profile-->
                            <div class="profile">
                                <!--img-->
                                <div class="profile-img">
                                    <img src="image/review1.jpeg" alt="Review Image" />
                                </div>
                                <!--name-and-username-->
                                <div class="name-user">
                                    <strong><?php echo htmlspecialchars($row['name']); ?></strong>
                                    <span><?php echo htmlspecialchars($row['email']); ?></span>
                                </div>
                            </div>
                            <!--reviews-->
                            <div class="reviews">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i><!-- empty star-->
                            </div>
                        </div>

                        <!--Comments-->
                        <div class="client-comment">
                            <p><?php echo htmlspecialchars($row['msg']); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>

        </section>
    </div>
</body>

</html>