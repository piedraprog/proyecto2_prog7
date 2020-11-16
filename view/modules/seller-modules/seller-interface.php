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

    </nav>

        <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- PAGINA PRINCIPAL -->
        <div class="container">
            <h1>BALANCE GENERAL</h1>

            <div class="row">
                <div class="card border-primary">
                  <img class="card-img-top" src="holder.js/100px180/" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                  </div>
                </div>    

                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>

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