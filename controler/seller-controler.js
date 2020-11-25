$(document).ready(function(){
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
})



// REQUEST TYPE OF PRODUCT
$('#Prod-type').ready(function(){

    url= "../../../model/seller/type-product.php";

    $.get(url,request =>{

        // console.log(request)

        template ="";

        const datos = JSON.parse(request);
        
        datos.forEach(element => {

            template +=`<option value="${element.id_type}">${element.type}</option> `;
        
        });
        
        $('#Prod-type').html(template);
    })

})


// PRODUCT REGISTER
$('#product-register').submit( e=>{

    e.preventDefault()

    formData = new FormData();
    
    formData.append('prod_id',    $('#Prod-id').val())
    formData.append('seller_id',  $('#id-seller').val())
    formData.append('prod_name',  $('#Prod-name').val())
    formData.append('prod_desc',  $('#Prod-desc').val())
    formData.append('prod_price', $('#Prod-price').val())
    formData.append('prod_type',  $('#Prod-type').val())
    formData.append('prod_qtt',   $('#Prod-quantity').val())
    formData.append('file',       $('#Prodpic')[0].files[0])

    
    url = "../../../model/seller/add-product.php";

    $.ajax({
        url: url,
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(request) {


            console.log(request)
            
            if(request == 1){
                $('#msg-success').html(`<h3 style="color:green">Éxito al agregar un Nuevo Producto</h3>`);
    
            }else{
                $('#msg-success').html(`<h3 style="color:red">Error al agregar un Nuevo producto, Por favor intente mas tarde</h3>`)
    
            }

            $('#product-register').trigger('reset');
        }
    });
        

})

// VERIFICATION ID PRODUCT

function VerifyIdProd(){

    if($('#Prod-id').val() != ""){

        data ={
            sellerid: $('#id-seller').val(),
            prodid: $('#Prod-id').val()
        }
    
        url="../../../model/seller/verify-product.php";
    
        console.log(data);
    
    
        $.post(url,data,request=>{
    
            if (request == "1") {

                $('#atl_cedula').addClass("is-invalid");
                document.getElementById('btn1').setAttribute("disabled", "");

            } else if (request == "2") {

                $('#atl_cedula').addClass("is-valid");
                document.getElementById('btn1').removeAttribute("disabled")

            }
        })
    
    }else{
        $('#atl_cedula').removeClass("is-invalid");
        $('#atl_cedula').removeClass("is-valid");
        document.getElementById('btn1').removeAttribute("disabled")
    }
    
    
   

}

// PRODUCT LIST
$('#ProductsList').ready(function(){
    ListProducts();
})

function NewProduct(){
    $('#ProductsList').hide();
    $('#ProductRegister').show();
}
function ProductsList(){
    $('#ProductsList').show();
    $('#ProductRegister').hide();
    
    ListProducts();
}


function ListProducts(){
    data = { 
        id: $('#id_seller').val()
    }

    url="../../../model/seller/product-list.php";

    $.post(url,data, request=>{
        
        
        template ="";
        
        const datos = JSON.parse(request);
        
        // console.log(datos)
        datos.forEach(element => {

            // console.log(element);
            template +=`<tr>
                            <td>${element.prod_id}</td>
                            <td>${element.prod_img}</td>
                            <td>${element.prod_name}</td>
                            <td>$ ${element.price}</td>
                            <td>${element.quantity}</td>`
            if(element.quantity > 0){
               template+=` <td><label class="btn btn-block btn-success">Disponible</label></td>`;
            }else{
                template+=` <td><label class="btn btn-block btn-danger">Agotado</label></td>`;
            }
                            
            template+=`</tr>`;
        
        });
        
        
        $('#Prolist').html(template);
    })
}


//SETTINGS

$('#settings').ready(function(){

    $('#change').on('click', e=>{
        e.preventDefault();
        let option = confirm("¿Desea Actualizar su información?")


        if(option){
            

            $('#Suser').removeAttr("disabled");
            $('#Semail').removeAttr("disabled");
            $('#SProPic').removeAttr("disabled");
            $('#Spass').removeAttr("disabled");

            $('#confirm').removeAttr("disabled");
        }    
    })

    $('#settings').submit( e=>{
        
        
        let option2 = confirm("¿Confirmar la Actualización de su información?")

        if(option2){

            e.preventDefault()

            formData = new FormData();

            formData.append('id_seller',  $('#seller-id').val())
            formData.append('user',  $('#Suser').val())
            formData.append('email',  $('#Semail').val())
            formData.append('file',  $('#SProPic')[0].files[0])
            

            console.log(formData)

            url = "../../../model/seller/settings-model.php";

            $.ajax({
                url: url,
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(request) {

                    console.log(request);

                    if(request == 1){
                        $('#msg-success2').html(`<h3 style="color:green">Éxito al agregar un Nuevo Producto</h3>`);
            
                    }else{
                        $('#msg-success2').html(`<h3 style="color:red">Error al agregar un Nuevo producto, Por favor intente mas tarde</h3>`)
            
                    }
                }
            })
        }

        


    });

});