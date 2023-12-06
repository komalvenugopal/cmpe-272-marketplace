<?php require "dbconnect.php" ?>
<?php

//Session Management
session_start();
if (!isset($_SESSION["user"])) {
    header("location: loginPage.php");
}
//Get Sorting Order
$order = "default";
if (isset($_GET['order'])) {
    $order =  $_GET['order'];
}
//Get Market Place
$market = "all";
if (isset($_GET['market'])) {
    $market =  $_GET['market'];
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
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="marketplace.php">Shop</a>
                    </li>

                </ul>
                <form action="logout.php">
                    <button style="margin-left:60vw;" type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div class="px-4 py-2 my-5 text-center">
            <style>
                .display-5 {
                    font-size: 2.5rem;
                    font-weight: 300;
                    line-height: 1.2;
                    background-color: beige;

                }
            </style>
            <h1 class="display-5 fw-bold">Our Stores</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Shop across our various stores</p>
            </div>
            <div class="col">
                <style>
                    .btn-secondary.title {
                        color: #fff;
                        background-color: black;
                        border-color: #6c757d;
                    }       

                    </style>
                <div style="display: flex; width: 100%; padding-left: 20%; padding-right: 30%;  justify-content: space-evenly; margin: 0;">
                    <a href="https://cmpe272.komalvenugopal.tech/ZoomCar/index.php" class="btn btn-secondary title">Zoom Car</a>
                    <a href="https://drone-market-0520205a5517.herokuapp.com/" class="btn btn-secondary title">Drop Hut</a>
                    <a href="https://cmpe-272-4e8d7c9692e3.herokuapp.com/index-2.html" class="btn btn-secondary title">Doccure</a>
                    <a href="https://jmcmpe272-bf43561f1604.herokuapp.com/service.php" class="btn btn-secondary title">Crypto Guard</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <!-- <?php if ($showLastVisited) : ?>
                <div class="row my-2">
                    <h5 class="display-7">Recently Visited</h5>
                    <hr>
                    <?php
                        $sql = "SELECT * FROM product WHERE id IN (" . implode(',', $last5Products) . ")";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $image = "../assets/" . $row["image"] . ".jpg";
                            $price = $row["price"];
                            $desc = $row["desc"];
                            $name = $row["name"];
                            $id = $row["id"];
                            echo '<div class="col-2 my-2 mx-3 px-2">
                                <div class="card" style="width: 15rem;">
                                    <img style="height: 10vh" class="card-img-top" src=' . $image . '>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $name . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Price: ' . $price . '</h6>
                                        <p class="card-text">
                                            ' . $desc . '
                                        </p>
                                        <form class="form-signin" method="post" action="showProduct.php">
                                            <button class="btn btn-secondary" name="id" value=' . $id . '>Checkout</a>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            <?php endif; ?> -->
            <div class="px-4 py-2 my-5 text-center">
                <h1 class="display-5 fw-bold">Our Products & Services</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">View products from all stores</p>
                </div>
                <div class="col">
                    <div style="display: flex; width: 100%; justify-content: space-around; margin-bottom: 25px;">
                        <p>Filter: </p>
                        <style>.btn.btn-outline-info {   color: #fff;   background-color: #0dcaf9;   border-color: #6c757d; }</style>  
                        <?php
                        
                        if ($market == "komal") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Zoom Car</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=komal&order=' . $order . '" class="btn btn-secondary">Zoom Car</a>';
                        }
                       
                        if ($market == "anudeep") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Drophut</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=anudeep&order=' . $order . '" class="btn btn-secondary">Drophut</a>';
                        }
                        
                        if ($market == "kaushikq") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Doccure</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=kaushikq&order=' . $order . '" class="btn btn-secondary">Doccure</a>';
                        }
                    
                        if ($market == "joshna") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Cryptoguard</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=joshna&order=' . $order . '" class="btn btn-secondary">Cryptoguard</a>';
                        }
                                            
                        if ($market == "recently") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Recently Visited</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=visited&order=' . $order . '" class="btn btn-secondary">Recently Visited</a>';
                        }
                        if ($market == "wholemarketplace") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Whole marketplace Top 5</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?market=wholemarketplace&order=' . $order . '" class="btn btn-secondary">Whole marketplace Top 5</a>';
                        }
                        ?>



                    </div>
                    <div style="display: flex; width: 100%; justify-content: space-around; margin: 0;">
                        <p>Sort: </p>
                        <?php
                        if ($order == "default") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Top 5</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=default&market=' . $market . '" class="btn btn-secondary">Top 5</a>';
                        }
                        if ($order == "highToLow") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Price: High - Low</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=highToLow&market=' . $market . '" class="btn btn-secondary">Price: High - Low</a>';
                        }
                        if ($order == "lowToHigh") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Price: Low - High</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=lowToHigh&market=' . $market . '" class="btn btn-secondary">Price: Low - High</a>';
                        }
                        if ($order == "highRated") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Highest Rated</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=highRated&market=' . $market . '" class="btn btn-secondary">Highest Rated</a>';
                        }
                        if ($order == "lowRated") {
                            echo '<a style="width: 170px" href="" class="btn btn-outline-info">Lowest Rated</a>';
                        } else {
                            echo '<a style="width: 170px" href="marketplace.php?order=lowRated&market=' . $market . '" class="btn btn-secondary">Lowest Rated</a>';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <h5 class="display-7">Products</h5>
            <hr>
            <div class="row">

                <?php
                $sql = "SELECT * FROM product";
                switch ($market) {
                    case "komal":
                        $sql = $sql . " where marketplace = 'komal' ";
                        break;
                    case "anudeep":
                        $sql = $sql . " where marketplace = 'anudeep' ";
                        break;
                    case "kaushikq":
                        $sql = $sql . " where marketplace = 'kaushikq' ";
                        break;
                    case "joshna":
                        $sql = $sql . " where marketplace = 'joshna' ";
                        break;
                    case "recently":
                        $sql = $sql . " where marketplace = 'recently' ";
                        break;
                    case "wholemarketplace":
                        $sql = $sql ;
                        break;
                    case "all":
                        $sql = $sql . " where marketplace = 'all' ";
                        break;


                }
                switch ($order) {
                    case "highToLow":
                        $sql = $sql . " order by price DESC";
                        break;
                    case "lowToHigh":
                        $sql = $sql . " order by price";
                        break;
                    case "highRated":
                        $sql = $sql . " order by rating DESC";
                        break;
                    case "lowRated":
                        $sql = $sql . " order by rating";
                        break;
                }

                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $image = "../assets/" . $row["image"] . ".jpg";
                    $market = $row["marketplace"];
                    if ($market == 'manasa') {
                        $image = $row["image"];
                    }
                    $price = $row["price"];
                    $desc = $row["desc"];
                    $name = $row["name"];
                    $id = $row["id"];
                    $rating = $row["rating"];

                    echo '<div class="col-3 my-2">
                                <div class="card" style="width: 18rem;">
                                    <img style="height: 25vh" class="card-img-top" src=' . $image . '>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $name . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Price: ' . $price . '</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Marketplace: ' . $market . '</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Rating: ' . $rating . '/5</h6>
                                        <p class="card-text">
                                            ' . $desc . '
                                        </p>
                                        <a href="showProduct.php?id=' . $id . '" class="btn btn-secondary" name="id">Checkout</a>
                                    </div>
                                </div>
                            </div>';
                }
                ?>

            </div>
        </div>
    </main>
</body>

</html>