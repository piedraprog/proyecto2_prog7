<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="../assets/css/Login-style.css">


    <!-- JQUERY -->
    <script src="../assets/js/general/jquery_3.4.1.js" defer></script>

    <!-- FONT AWESOME -->
    <script src="../assets/css/fontawesome/js/all.js" defer></script>

    <!-- BOOTSTRAP -->
    <script src="../assets/css/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap-grid.min.css">
    <script src="../assets/css/bootstrap/js/bootstrap.min.js" defer></script>

    
    <script src="../assets/js/login-style.js" defer></script>
</head>

<body>
    <div id="form_wrapper">

        <div id="form_left">
            <img src="../assets/img/img7.jpg" alt="condominio-icon">
        </div>


        <form id="form_right">
            <h1>Iniciar Sesion</h1>

            <div class="input_container">

                <i class="fas fa-envelope"></i>
                <input placeholder="Email" type="email" name="Email" id="correo" class='input_field'>

            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input placeholder="Password" type="password" name="Password" id="pass" class='input_field'>
            </div>
            <input type="submit" value="Iniciar Sesion" id='input_submit' class='input_field'>
            
            
            <div  id="mensaje" style="color: red; ">
              
            </div>
            
            
            <span>Olvido<a href="seller-modules/seller-interface.php"> Usuario/Contraseña?</a></span>
            <span id='create_account' data-toggle="modal" data-target="#RegisterModal"><a href="#">Crear una cuenta/Create your account</a></span>
        </form>

        

    </div>

    
    
    <!-- REGISTER MODAL -->
    <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrarme</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    

</body>


</html>


