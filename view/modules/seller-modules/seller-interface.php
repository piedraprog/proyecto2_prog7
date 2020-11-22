<?php

session_start();

if(!isset($_SESSION['seller-email'])){

    header("location: ../login.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller View</title>

    <!-- FONT AWESOME -->
    <script src="../../assets/css/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/seller-page/seller-style.css">



</head>
<body>
    
    <div class="wrapper d-flex align-items-stretch" >
        <!-- SELLER SIDE BAR -->
        <?php include 'seller-sidebar.php'?>
        
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <!-- PAGINA PRINCIPAL -->
            <?php include 'sellerpage.php'?>
            
            <!-- VENTAS -->
            <?php include 'sales.php' ?>

            <!-- INVENTARIO -->
            <?php include 'inventory.php'?>

            <!-- AJUSTES -->
            <?php include 'settings.php'?>

            <!-- AYUDA -->
            <?php include 'help.php'?>

        </div>
    </div>



    <!-- JQUERY -->
    <script src="../../assets/js/general/jquery_3.4.1.js"></script>
    <script src="../../assets/js/general/popper.js"></script>
    <script src="../../assets/js/general/popper.min.js"></script>

    <!-- CHART JS -->
    <script src="../../assets/js/chart.js/Chart.min.js"></script>

    <!-- BOOTSTRAP -->
    <script src="../../assets/css/bootstrap/js/bootstrap.min.js"></script>

    <!-- SCRIPT APP -->
    <script src="../../assets/js/Seller-app.js"></script>
</body>
</html>