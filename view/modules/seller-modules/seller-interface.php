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
    <nav id="sidebar" >
        <!-- SIDE BAR -->
        <div class="custom-menu">
            <!-- BOTON DE ESCONDER -->
			<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  	<div class="img bg-wrap text-center py-4" style="background-image: url(../../assets/img/img1.jpg);">
	  		<div class="user-logo">
	  			<div class="img" style="background-image: url(../../assets/img/img5.jpg);"></div>
	  			<h3 >USER NAME</h3>
	  		</div>
	  	</div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="#"><span class="fa fa-home mr-3"></span>Home</a>
            </li>
            <li>
                <a href="#"><span class="fas fa-shopping-bag mr-3"></span>Ventas</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-list mr-3"></span>Inventario</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-cog mr-3"></span>Ajustes</a>
            </li>
            <li>
                <a href="#"><span class="fa fa-hands mr-3"></span>Ayuda</a>
            </li>
            <li>
                <a href="../../index.php"><span class="fa fa-sign-out-alt mr-3"></span>Sign Out</a>
            </li>
        </ul>
        <footer>&copy Bsic Store v1.0 REV-16112020</footer>
    </nav>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- PAGINA PRINCIPAL -->
        <div class="container">
            
            <h1 class="text-center ">Home</h1>
            <br>
            <div class="card-deck">
                <div class="card text-white bg-primary mb-3" style="max-width: 15rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Balance General</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 15rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Balance General</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 15rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Balance General</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="graphics">
                
            </div>
        </div>

        <!-- VENTAS -->
        <div class="container">
            
        </div>

        <!-- INVENTARIO -->
        <div class="container">
            
        </div>

        <!-- AJUSTES -->
        <div class="container">
            
        </div>

        <!-- AYUDA -->
        <div class="container">
            
        </div>

    </div>
</div>


    <footer>
        
    </footer>

    <!-- JQUERY -->
    <script src="../../assets/js/general/jquery_3.4.1.js"></script>
    <script src="../../assets/js/general/popper.js"></script>
    <script src="../../assets/js/general/popper.min.js"></script>

    <!-- BOOTSTRAP -->
    <script src="../../assets/css/bootstrap/js/bootstrap.min.js"></script>

    <!-- SCRIPT APP -->
    <script src="../../assets/js/Seller-app.js"></script>
</body>
</html>