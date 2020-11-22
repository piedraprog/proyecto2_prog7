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
    $('#User-settings').hide();


    console.log("Home Page");
}

function ShowShop() {
    $('#content').hide();
    $('#slider').hide();
    $('#footer').hide();
    $('#list').show();
    $('#ShoppingCart').hide();
    $('#User-settings').hide();

    console.log("Shop");
}

function ShowShoppingCart(){
    $('#content').hide();
    $('#slider').hide();
    $('#footer').hide();
    $('#list').hide();
    $('#ShoppingCart').show();
    $('#User-settings').hide();

    console.log("ShowShoppingCart");
}

function ShowLogin(){
    $('#content').hide();
    $('#slider').hide();
    $('#footer').hide();
    $('#list').hide();
    $('#ShoppingCart').hide();
    $('#User-settings').hide();

    console.log("Login");
}


function ShowOptionUser(){
    $('#content').hide();
    $('#slider').hide();
    $('#footer').hide();
    $('#list').hide();
    $('#ShoppingCart').hide();
    
    $('#User-settings').show();

    console.log("Settings");
}