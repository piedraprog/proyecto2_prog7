$('#register').submit(e=>{
    e.preventDefault()

    var formData = new FormData();

    const url = '../../model/login/register.php';
    
    formData.append('iduser', $('#user_id').val())
    formData.append('username', $('#user_name').val())
    formData.append('user_type', $('#usertype').val())
    formData.append('email', $('#email').val())
    formData.append('pass', $('#password').val())
    formData.append('file', $('#file')[0].files[0])


    $.ajax({
        url: url,
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {

            console.log(response)

            if(response == 1){
                alert("Usuario Creado con éxito");
    
            }else if(response == 2){
                alert("Error al crear el usuario");
            }else{
                alert("formulario vació");
            }
    
    
            $('#register').trigger('reset');
        }
    });


})
       