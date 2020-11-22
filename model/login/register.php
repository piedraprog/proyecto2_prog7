<?php 

include '../conect.php';

$id =$_POST['id_user'];        
$username =$_POST['username'];
$user_type =$_POST['user_type'];
$email =$_POST['email'];     
$password =$_POST['pass'];
$file =$_POST['file'];


$sql="INSERT INTO pro.tbl_users(pk_user, username, email, user_password, fk_type)
	VALUES ('$id','$username','$email','$password' ,'$user_type');";

if( pg_query($con , $sql) ){
    echo "1";
}else{
    echo "2";
}


?>