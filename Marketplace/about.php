<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php require "../head.php" ?>
    <title>Marketplace</title>
    <?php ob_start(); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                MarketPlace
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="marketplace.php">Shop</a>
                    </li>

                </ul>
                <form action="logout.php">
                    <button style="margin-left:60vw;" type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="../assets/logo.png" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold">About Us</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Welcome to 272_Marketplace, your all-encompassing online destination for a variety of services and products designed to fit your dynamic lifestyle. At 272_Marketplace, we offer a seamless and extensive platform where convenience is paired with a wide array of choices. Discover our versatile range of services: book the ideal car for your next journey, find and schedule appointments with leading healthcare experts, or explore our selection of state-of-the-art drones for both personal and professional use. In the realm of digital finance, 272_Marketplace is a leader, providing advanced crypto services including robust currency wallets and insightful strategies for portfolio diversification. Our dedication to quality, reliability, and customer satisfaction establishes 272_Marketplace as the premier online hub for those who value efficiency, innovation, and excellence in their digital interactions.</p>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row my-2">
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">What we do</p>
                    <p class="text-start fs-6">At 272_Marketplace, we are committed to enhancing your online experience by offering a blend of quality, convenience, and innovation. Our platform is designed to meet your needs efficiently, making sure that whether you're booking a car, scheduling a doctor's appointment, purchasing a drone, or exploring the world of cryptocurrency, you're getting the best the digital world has to offer.</p>
                </div>
                <div class="col-5">
                    <img src="../assets/about.jpg" class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
            </div>
            <hr>
        </div>
            <hr>
    </main>
</body>

</html>