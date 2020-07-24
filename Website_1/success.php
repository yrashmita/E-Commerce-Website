<?php

require("includes/common.php");

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$item_id = $_GET['item_id'];//itemsid
$user_id = $_SESSION['user_id'];


$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_id . ") and status='Added to cart'";

mysqli_query($conn, $query) or die($mysqli_error($conn));
?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>


    <body>
        <?php
         include 'includes/header.php'; 
         ?>

        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php 

        include("includes/footer.php");
        ?>
    </body>
</html>