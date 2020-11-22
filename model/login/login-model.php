<?php

include '../conect.php';

// echo "user".$_POST['user'];
// echo "contra".$_POST['pass'];

session_start();
if(isset($_POST['user']) && isset($_POST['pass'])){
    
    
    $user = pg_escape_string($con, $_POST['user']);
    $pass = pg_escape_string($con, $_POST['pass']);

    //BUSCA EN LA TABLA USERS ALGUNA COINCIDENCIA PARA ASI INICIAR SESIÓN COMO USUARIO
    $query = "SELECT pk_user, username, email, user_password, fk_type
                FROM pro.tbl_users 
                WHERE email = '$user' AND user_password = '$pass'";

    $result = pg_query($con,$query);
    $num_row = pg_num_rows($result);


    if($num_row == "1"){

        $data = pg_fetch_array($result);

        //IF QUE DEFINE EL TIPO DE USUARIO Y EN BASE A ESO GENERAR DIFERENTES ACCIONES
        if($data['fk_type'] == '1'){

            echo "1";

            // VARIABLE SESSIONS QUE SE MANEJAN DE MANERA GLOBAL Y PERMITEN HACER ACCIONES CON PHP
            $_SESSION['seller-email'] = $data['email'];
            $_SESSION['seller-id-'] = $data['pk_user'];
            $_SESSION['seller-user'] = $data['username'];

        }else if($data['fk_type'] == '2'){

            echo "2";
            $_SESSION['buyer-email'] = $data['email'];
            $_SESSION['buyer-id'] = $data['pk_user'];
            $_SESSION['buyer-user'] = $data['username'];

        }else if($data['fk_type'] =='3'){

            echo "3";
            $_SESSION['admin-email'] = $data['email'];
            $_SESSION['admin-id'] = $data['pk_user'];
            $_SESSION['admin-user'] = $data['username'];
        }


    }else{
        echo("error no encontrado");
    }

}else{
    echo("valores vacíos");
}
 


?>