<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: loginPage.php");
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
        <div class="container-xxl">
            <a class="navbar-brand" href="#">
                <img src="../assets/logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                MarketPlace
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
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
    <main role="main">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/bg_1.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">Zoom Car - Best Car Rental</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../assets/images/bg_2.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">Drophut</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../assets/images/bg_3.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">Doccure</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../assets/images/bg_4.jpg" class="d-block w-100" alt="..." style="height: 35rem;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="bg-light text-dark">Cryptoguard</h5>
                    </div>
                </div>


            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <div class="container">
            <div class="row my-2">
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Zoom Car</p>
                    <p class="text-start fs-6">There are many variations of cars available and you can choose the fuel type and book a car on the date you wanted and the time you wanted. We offer best customer satisfaction. We will be updating the website with the mew models available within your region.</p>
                </div>
                <div class="col-5">
                    <img src="../assets/zoomcar.jpg" class="d-block w-100" alt="..."
                        style="height: 25rem; width: 25rem">
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <img src="../assets/drone.jpg"
                        class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Drophut</p>
                    <p class="text-start fs-6">Te premier drone booking portal where the sky is not the limit! At SkyLens, we specialize in connecting you with top-notch drone services for photography, videography, and aerial surveys. Founded by a team of passionate drone enthusiasts and tech experts, we are committed to providing a seamless booking experience for both personal and professional drone needs. Our platform offers a diverse range of drones, piloted by certified and experienced operators, ensuring safety and quality in every flight. Whether you're capturing a wedding from above, surveying land, or filming a cinematic masterpiece!

</p>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row my-2">
                    <div class="col-7">
                        <p class="text-start fs-1 lh-1">Doccure</p>
                        <p class="text-start fs-6">A doctor appointment booking portal is an online platform that facilitates the scheduling of medical appointments with healthcare professionals.</p>
                    </div>
                    <div class="col-5">
                        <img src="../assets/doctor.jpg" class="d-block w-100" alt="..."
                            style="height: 25rem; width: 25rem">
                    </div>
                </div>
            </div>
            <hr>            
            <div class="container">
            <div class="row my-2">
                <div class="col-5">
                    <img src="../assets/crypto.jpg"
                        class="d-block w-100" alt="..." style="height: 25rem; width: 25rem">
                </div>
                <div class="col-7">
                    <p class="text-start fs-1 lh-1">Crypto Guard</p>
                    <p class="text-start fs-6">CryptoGuard is a comprehensive cryptocurrency management platform designed to empower users with a seamless and secure experience in the world of digital currencies. Our user-friendly interface coupled with cutting-edge features makes CryptoGuard the go-to app for both beginners and experienced crypto enthusiasts.</p>
                </div>
            </div>
x
    </main>

</body>

</html>