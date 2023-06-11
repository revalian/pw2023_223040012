<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>About Us</h3>
        <p> <a href="home.php">Home</a> / About </p>
    </div>

    <section class="about">
        <div class="layar-dalam">
            <h3>Why Choose Us?</h3>
            <p class="ringkasan">Kixie is a foot fashion brand focusing on women's casual footwear, <br>
                striving to bring a fresh approach in fashion through our products and values.</p>
            <div class="konten-isi">
                <p>Our spirit, we believe every women deserves to express herself fearlessly. <br> Kixie takes you to the destination of self expression.</p>
            </div>
        </div>
    </section>







    <?php include 'footer.php' ?>

    <!-- link js -->
    <script src="assets/js/user_script.js"></script>

</body>

</html>