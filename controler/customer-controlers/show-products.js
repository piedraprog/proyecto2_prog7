$(document).ready(function(){
    lastProducts();
});


function lastProducts(){

    url="../model/user/list-products.php";

    $.get(url,request=>{

        console.log(request)


    })



}