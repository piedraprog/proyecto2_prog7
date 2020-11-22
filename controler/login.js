$('#form_right').submit(e=>{
    
   e.preventDefault();

    data = {
        user: $('#correo').val(),
        pass: $('#pass').val()
    } 

    //console.log (data.pass);

    url ="../../model/login/login-model.php";

    $.post(url,data,(request)=>{

        // console.log(request);

        if(request == "1"){

            console.log("seller");
            $(location).attr('href', 'seller-modules/seller-interface.php');

        }else if(request = "2"){
            
            console.log("buyer");   
            $(location).attr('href', '../index.php');

        
        }else if(request = "3"){
            
            console.log("admin");
            $(location).attr('href', '#');
        
        }else{
            $('#message').html(`<h3>ERROR EN LAS CREDENCIALES</h3>`);
        }
    })

});