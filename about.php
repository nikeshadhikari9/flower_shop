<?php

@include 'config.php';

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
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom admin css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <section class="heading">
        <h3>about us</h3>
        <p> <a href="home.php">home</a> / about </p>
    </section>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/about-img-1.png" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Choose us for fresh, beautifully arranged flowers delivered with care, ensuring every occasion blooms with love and joy!</p>
                <a href="shop.php" class="btn">shop now</a>
            </div>

        </div>

        <div class="flex">

            <div class="content">
                <h3>what we provide?</h3>
                <p>We provide a wide range of fresh, handpicked flowers for every occasion, beautifully arranged and delivered right to your doorstep. From bouquets for birthdays to wedding arrangements, we ensure your special moments bloom with love and elegance.</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

            <div class="image">
                <img src="images/about-img-2.jpg" alt="">
            </div>

        </div>

        <div class="flex">

            <div class="image">
                <img src="images/about-img-3.jpg" alt="">
            </div>

            <div class="content">
                <h3>who we are?</h3>
                <p>We are a passionate team of floral experts dedicated to bringing beauty and joy to your special moments. With a love for flowers and an eye for design, we carefully curate and deliver stunning floral arrangements to brighten any occasion, all while providing exceptional service and convenience.</p>
                <a href="#reviews" class="btn">clients reviews</a>
            </div>

        </div>

    </section>

    <?php @include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>