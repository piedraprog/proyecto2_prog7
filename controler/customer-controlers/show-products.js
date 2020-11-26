$(document).ready(function(){
    lastProducts();
});


function lastProducts(){

    url="../model/user/list-products.php";

    

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
                                <input onclick="InsertIntoCart('${element.prod_name}')"type="submit" class="btn btn-primary"value="Añadir al Carrito">
                            </div>
                        </div>`;

        })

        $('#last-product-list').html(template);

    })



}


ArrayProduct = [];

counter = "";

function InsertIntoCart(ProdName){


    console.log("añadido al carrito")

    const product = {

        Prod_name: ProdName

    }

    ArrayProduct.push(product);

    localStorage.setItem('Product', JSON.stringify(ArrayProduct))

    UpdateCart();

}


function UpdateCart(){


    let Items= ArrayProduct.length;

    console.log(Items)
}


$('#NumberProducts').ready(function(){
    
})