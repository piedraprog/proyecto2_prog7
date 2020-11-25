<div class="container" id="inventory">
    <h1>Inventario</h1>
    <!-- BUTONS INFORMATION -->
    <div class="row">
        <div class="col-xs-1-12">
            <button type="button" onclick="NewProduct()" class="btn btn-primary">Nuevo Producto</button>
        </div>
        <div class="col-xs-1-12">
            <button type="button" onclick="ProductsList()" class="btn btn-secondary">Listar Productos</button>
        </div>
    </div>
    <!-- TABLE PRODUCTS -->
    <br>
    <div class="col-12 table-responsive" id="ProductsList">
        <table class="table table-striped">
            <div class="card-header">
                <h3 class="card-title">Productos</h3>
            </div>
            <thead>
                <input type="hidden" id="id_seller" value="<?php echo $_SESSION['seller-id']?>">
                <tr>
                    <th>Id</th>
                    <th>foto</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Mas</i> </th>
                </tr>
            </thead>
            <tbody id="Prolist">
                
            </tbody>
        </table>
    </div>

    <!-- PRODUCTS REGISTERS -->
    
    <div class="card" id="ProductRegister">
        <div class="card-header">
            <h3>Registro de nuevo Producto</h3>
        </div>
        <div class="card-body">
            <form id="product-register" role="form" method="post"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="hidden" id="id-seller" value="<?php echo $_SESSION['seller-id'] ?>">
                            <label>Codigo del producto</label>
                            <input id="Prod-id" onkeyup="VerifyIdProd()" type="text" class="form-control" placeholder="fecha">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nombre del Producto</label>
                            <input id="Prod-name" type="text" class="form-control" placeholder="Descripcion del producto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Descripción del Producto</label>
                            <input id="Prod-desc" type="text" class="form-control" placeholder="Descripcion del producto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Precio de Producto</label>
                            <textarea id="Prod-price" class="form-control"  placeholder="descripcion"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tipo de Producto</label>
                            <select id="Prod-type" class="form-control" required >
                                
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Foto de Producto</label>
                        <input type="file" name="archivo" id="Prodpic">
                    </div>
                    <div class="col-sm-6">
                        <label>Cantidad del Producto</label>
                        <input type="number" class="form-control" id="Prod-quantity">
                    </div>
                </div>
                <br>
                <button type="submit" id="btn1" class="btn btn-primary">Registrar Nuevo Producto</button>
                
            </form>
            <div id="msg-success" class="card-footer text-muted">
                
            </div>
            
        </div>
            
        
    </div>
</div>