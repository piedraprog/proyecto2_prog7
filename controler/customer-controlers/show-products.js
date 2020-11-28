$(document).ready(function(){
    lastProducts();
});


function lastProducts(){

    url="model/user/list-products.php";

    

    $.get(url,request=>{

        

        data = JSON.parse(request);

        template = "";

        data.forEach(element => {
            // console.log(element);

            template+=`<div class="card col-sm-4" >
                            <img src="${element.prod_img}" class="card-img-top" alt="muestra">
                            <div class="card-body">
                                <h4 class="card-title">${element.prod_name}</h4>
                                <h5 class="card-title">$ ${element.price}</h5>
                                <p class="card-text">${element.prod_dscp}</p>
                                <input onclick="InsertIntoCart('${element.prod_name}','${element.prod_id}','${element.price}','${element.quantity}','${element.prod_dscp}')"type="submit" class="btn btn-primary"value="Añadir al Carrito">
                            </div>
                        </div>`;

        })

        $('#last-product-list').html(template);

    })



}

ArrayProduct = [];
function InsertIntoCart(prod_name,prod_id,price,quantity,prod_dscp){

    
    // console.log("añadido al carrito")

    const product = {

        Prod_name: prod_name,
        Prod_id: prod_id,
        // Prod_img: prod_img,
        price: price,
        quantity: quantity,
        prod_dscp: prod_dscp

    }

    ArrayProduct.push(product);

    localStorage.setItem('Product', JSON.stringify(ArrayProduct))

    UpdateCart();

    
}


function UpdateCart(){


    $('#NumberProducts').ready(function(){
        var quantityOfProd = JSON.parse(localStorage.Product);
    
        $('#NumberProducts').html("("+quantityOfProd.length+")")
    })
  
   
}


$('#Mylist').on('click',e=>{

    e.preventDefault();

    ProdTotal = 0;

    var quantityOfProd = JSON.parse(localStorage.Product);

    
    template = "";

    quantityOfProd.forEach(element => {
        
        console.log(element);

        subTotal = element.quantity * element.price;
        ProdTotal = subTotal + ProdTotal;

        

        template+=`<tr>
                    
                    <td>${element.Prod_id}</td>
                    <td>${element.Prod_name}</td>
                    <td>${element.quantity}</td>
                    <td>${element.price}</td>
                    <td>${subTotal}</td>
                </tr>
                `
    });

    $('#cart-list').html(template)
    $('#total').html("$ "+ProdTotal);

    console.log("total de los productos"+ProdTotal);
})


$('#btn-confirm').on('click', e=>{

    e.preventDefault();

    e.preventDefault();

    ProdTotal = 0;

    var quantityOfProd = JSON.parse(localStorage.Product);

    
    template = "";

    quantityOfProd.forEach(element => {
        
        console.log(element);

        subTotal = element.quantity * element.price;
        ProdTotal = subTotal + ProdTotal;

        

        template+=`<tr>
                    
                    <td>${element.Prod_name}</td>
                    <td>${element.quantity}</td>
                    <td>${element.price}</td>
                    <td>${subTotal}</td>
                </tr>
                `
    });

    $('#readytobuy').html(template)
    $('#readytotal').html("$ "+ProdTotal);

    console.log("total de los productos"+ProdTotal);

})

$('#buy').on('click', e=>{

    alert("Compra realizada con exito");

    localStorage.clear();
})
    



