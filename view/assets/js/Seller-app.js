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

    ShowInventory();

    // CHART.JS GRAPHICS 

    let popCanvas = document.getElementById("myChart").getContext("2d");
    let barChart = new Chart(popCanvas, {
        type: 'bar',
        data: {
            labels: ["China", "India", "United States", "Indonesia", "Brazil", "Pakistan", "Nigeria", "Bangladesh", "Russia", "Japan"],
            datasets: [{
            label: 'Population',
            data: [137, 1281, 321, 264, 207, 2049, 1906, 1578, 1422, 1268],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)'
            ]
            }]
        }
    });
            
    let popCanvas2 = document.getElementById("mySecondChart").getContext("2d");
    let barChart2 = new Chart(popCanvas2, {
        type: 'pie',
        data: {
            labels: [ "Brazil", "Pakistan", "Nigeria", "Bangladesh", "Russia", "Japan"],
            datasets: [{
            label: 'Population',
            data: [ 207, 2049, 1906, 1578, 1422, 1268],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)'
            ]
            }]
        }
    });

    let popCanvas3 = document.getElementById("myThirdChart").getContext("2d");
    let barChart3 = new Chart(popCanvas3, {
        type: 'line',
        data: {
            labels: [ "Brazil", "Pakistan", "Nigeria", "Bangladesh", "Russia", "Japan"],
            datasets: [{
            label: 'Population',
            data: [ 207, 2049, 1906, 1578, 1422, 1268],
            backgroundColor: [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)'
            ]
            }]
        }
    });


    

});



function ShowShome(){
    $('#seller-page').show();
    
    $('#sales').hide();
    $('#inventory').hide();
    $('#settings').hide();
    $('#help').hide();
    
}

function ShowSales(){
    $('#seller-page').hide();
    
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


function NewProduct(){
    $('#ProductsList').hide();
    $('#ProductRegister').show();
}
function ProductsList(){
    $('#ProductsList').show();
    $('#ProductRegister').hide();
    
}