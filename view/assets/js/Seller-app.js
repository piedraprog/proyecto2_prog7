$(document).ready(function() {

    // SIDE BAR JAVASCRIPT
    (function($) {

        "use strict";

        var fullHeight = function() {

            $('.js-fullheight').css('height', $(window).height());
            $(window).resize(function(){
                $('.js-fullheight').css('height', $(window).height());
            });

        };
        fullHeight();

        $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    })(jQuery);

    // SHOW DE HOME PAGE OF SELLERS

    ShowShome();
    
    


    

});



function ShowShome(){
    $('#seller-page').show();
    $('#sales').show();
    $('#inventory').hide();
    $('#settings').hide();
    $('#help').hide();
    
}


function ShowInventory(){
    $('#seller-page').hide();
    
    $('#sales').hide();
    $('#inventory').show();
    $('#settings').hide();
    $('#help').hide();

    ProductsList();

}
function ShowSettings(){
    $('#seller-page').hide();
    
    $('#sales').hide();
    $('#inventory').hide();
    $('#settings').show();
    $('#help').hide();
}
function ShowHelp(){
    $('#seller-page').hide();
    
    $('#sales').hide();
    $('#inventory').hide();
    $('#settings').hide();
    $('#help').show();
}


