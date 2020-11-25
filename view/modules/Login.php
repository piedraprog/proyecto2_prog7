
<?php

session_start();

if(isset($_SESSION['seller-email'])){
    // SET LA PAGINA DEPENDIENDO DE EL  NIVEL DEL USUARIO
    header("location: seller-modules/seller-interface.php");

}else if(isset($_SESSION['buyer-email'])){

    header("location: ../index.php");

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="../assets/css/Login-style.css">


    <!-- JQUERY -->
    <script src="../assets/js/general/jquery_3.4.1.js" defer></script>
    <!-- <script src="../assets/js/general/jquery-3.1.1.min.js" defer></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" defer></script>

    <!-- FONT AWESOME -->
    <script src="../assets/css/fontawesome/js/all.js" defer></script>

    <!-- BOOTSTRAP -->
    <script src="../assets/css/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap/css/bootstrap-grid.min.css">
    <script src="../assets/css/bootstrap/js/bootstrap.min.js" defer></script>

    <script src="../../controler/register.js" defer></script>
    <script src="../../controler/login.js" defer></script>


    <script src="../assets/js/login-style.js" defer></script>
</head>

<body>

    <!-- LOGIN DIV -->
    <div id="form_wrapper">

        <div id="form_left">
            <img src="../assets/img/img7.jpg" alt="condominio-icon">
        </div>


        <form id="form_right">
            <h1>Iniciar Sesion</h1>

            <div class="input_container">

                <i class="fas fa-envelope"></i>
                <input placeholder="Email" type="email" name="Email" id="correo" class='input_field' required>

            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input placeholder="Password" type="password" name="Password" id="pass" class='input_field' required>
            </div>
            <input type="submit" value="Iniciar Sesión" id='input_submit' class='input_field'>
            
            
            <div  id="message" style="color: red; ">
              
            </div>
            
            
            <span>Olvido<a href="#"> Usuario/Contraseña?</a></span>
            <span>Volver<a href="../index.php"> homepage</a></span>
            <span id='create_account' data-toggle="modal" data-target="#RegisterModal"><a href="#">Crear una cuenta/Create your account</a></span>
        </form>

        

    </div>

    




    <!-- REGISTER MODAL -->
    <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="#">
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
                            <form id="register" method="post"  enctype="multipart/form-data">
                                <!-- CEDULA -->
                                <label>Cedula</label>
                                <input type="Number" class="form-control" id="user_id" placeholder="Ex: 21282181" required>

                                <!-- USERNAME -->
                                <label>Username</label>
                                <input type="text" class="form-control" id="user_name" placeholder="Ex: user123" required>
                           
                                <!-- TIPO DE USUARIO -->
                                <label>Tipo de Usuario</label>
                                
                                <select id="usertype" class="form-control" required >
                                    <option value="2">Usuario</option> 
                                    <option value="1">Vendedor</option> 
                                </select>

                                <!-- EMAIL -->
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Ex: nombre@nombre.com">

                                <!-- CONTRASEÑA -->
                                <label>Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">

                                <!-- FOTO PERFIL -->
                                <div class="form-group">
                                    <label>Foto Perfil</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control-file" id="file" >
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" class="form-check-input" id="check-polities"  >
                                    <label class="form-check-label" for="exampleCheck1">He leído las<a href="#">Políticas de privacidad</a> y <a href="#">Reglas de uso</a> </label>
                                </div>
                                <button type="submit"  class="btn btn-primary">Registrarme</button>
                            </form>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

</body>


</html>


