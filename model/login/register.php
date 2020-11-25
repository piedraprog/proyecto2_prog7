<?php 

include '../conect.php';

$id = $_POST['iduser'];   
$username = $_POST['username'];
$user_type = $_POST['user_type'];
$email = $_POST['email'];     
$password = $_POST['pass'];
$file = $_FILES['file']['tmp_name'];

//CODIFICA LA IMAGEN PARA EL CAMPO BYTEA
$fp = fopen($file, 'r+b');
$data = fread($fp, filesize($file));
//escapar los caracteres
$data = pg_escape_bytea($data);
 fclose($fp);


$sql="INSERT INTO pro.tbl_users(pk_user, username, email, user_password, fk_type, profile_photo)
	VALUES ('$id','$username','$email','$password' ,'$user_type','$data');";

if( pg_query($con , $sql) ){
    echo "1";
}else{
    echo "2";
}


?>