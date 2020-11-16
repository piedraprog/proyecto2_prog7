$(document).ready(function() {

    console.log("jquery");

    ShowHomepage();
})


function ShowHomepage() {
    $('#content').show();
    $('#slider').show();
    $('#footer').show();
    $('#list').hide();
    $('#ShoppingCart').hide();



    console.log("Home Page");
}

function ShowShop() {
    $('#content').hide();
    $('#slider').hide();
    $('#footer').hide();
    $('#list').show();
    $('#ShoppingCart').hide();


    console.log("Shop");
}

function ShowShoppingCart(){
    $('#content').hide();
    $('#slider').hide();
    $('#footer').hide();
    $('#list').hide();
    $('#ShoppingCart').show();




    console.log("ShowShoppingCart");
}

function ShowLogin(){
    $('#content').hide();
    $('#slider').hide();
    $('#footer').hide();
    $('#list').hide();
    $('#ShoppingCart').hide();

    console.log("Login");
}