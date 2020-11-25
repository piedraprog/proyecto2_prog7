<div class="container" id="settings">
    <h1 class="text-center">Ajustes<input type="submit" id="change" class="btn btn-primary"  value="Actualizar"></h1> 
        
    <div  class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Informacion de perfil</h3>
            </div>
        <!-- SETTING CHANGE -->
        <div class="card-body">
            <form id="settings-form" role="form" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <input type="hidden" id="seller-id" value="<?php echo $_SESSION['seller-id']?>">

                            <label>Usuario</label>
                            <input id="Suser" type="text" class="form-control" value="<?php echo $_SESSION['seller-user']?>" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input id="Semail" type="text" class="form-control" value="<?php echo $_SESSION['seller-email']?>" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto de perfil</label>
                            <input id="SProPic" type="file" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" id="confirm" value="Confirmar Cambios" disabled>
                
            </form> 
        </div>     
        <!-- SERVER SUCCESS MESSAGE -->
        <div class="card-footer">
            <div id="msg-success2" >
                <p>Para que los cambios surtan efecto tiene que volver a iniciar sesion</p>
            </div> 
        </div>     
    </div>    
    
</div>
