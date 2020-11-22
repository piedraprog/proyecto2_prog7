<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bsic Store</title>
    <?php include 'modules/headassets.php' ?>
</head>
<body>

    <!-- NAV BAR -->
    
    <?php 
        if(isset($_SESSION['buyer-email'])){

            include 'modules/costumer-modules/user-navbar.php';
            
        }else{

            include 'modules/landing-modules/navbar.php' ;
        }
    ?>
    <!-- SLIDER -->
    <?php include 'modules/landing-modules/slider.php' ?>

    <!-- CONTENT HOME PAGE -->
    <?php include 'modules/landing-modules/content.php'  ?>
    
    <!-- SHOP SECTION -->
    <?php include 'modules/landing-modules/Shop.php' ?>

    <!-- SHOPPING CART -->
    <?php include 'modules/landing-modules/ShopCart.php' ?>

    <?php 

        if(isset($_SESSION['buyer-email'])){

            include 'modules/costumer-modules/settings-user.php';

        }
    ?>

    <!-- FOOTER -->
    <?php include 'modules/landing-modules/footer.php' ?>


</body>
</html>