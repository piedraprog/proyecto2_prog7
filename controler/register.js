$('#register').submit(e => {

    e.preventDefault();

    data = {
        id_user : $('#user_id').val(),
        username: $('#user_name').val(),
        user_type: $('#usertype').val(),
        email: $('#email').val(),
        pass: $('#password').val(),
        file: $('#file').val()
    }

    const url = '../../model/login/register.php';

    console.log(data);

    $.post(url, data, (respuesta) => {
        console.log(respuesta);

        if(respuesta == 1){
            alert("Usuario Creado con éxito");

        }else if(respuesta == 2){
            alert("Error al crear el usuario");
        }else{
            alert("formulario vació");
        }


        $('#register').trigger('reset');



    });
});