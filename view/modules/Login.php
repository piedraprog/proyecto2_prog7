<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link rel="stylesheet" href="../assets/css/Login-style.css">

    
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
            <span id='create_account'><a href="registro.html">Crear una cuenta/Create your account</a></span>
        </form>

        

    </div>


</body>


</html>