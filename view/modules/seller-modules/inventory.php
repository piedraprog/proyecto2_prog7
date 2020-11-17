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
                <tr>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Mas</i> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2020</td>
                    <td>febrero</td>
                    <td>$64.50</td>
                    <td><label class="btn btn-block btn-success">Vigente</label></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2020</td>
                    <td>marzo</td>
                    <td>$64.50</td>
                    <td><label class="btn btn-block btn-danger ">Debe</label></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- PRODUCTS REGISTERS -->
    
    <div class="card" id="ProductRegister">
        <div class="card-header">
            <h3>Registro de nuevo Producto</h3>
        </div>
        <div class="card-body">
            <form id="registrocuota" role="form">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            
                            <label>Codigo del producto</label>
                            <input id="#" type="text" class="form-control" placeholder="fecha">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Descripcion del Producto</label>
                            <input id="#" type="text" class="form-control" placeholder="fecha venciento">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Precio de Producto</label>
                            <textarea id="#" class="form-control"  placeholder="descripcion"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tipo de Producto</label>
                            <textarea id="#" class="form-control"  placeholder="descripcion"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <label>Foto de Producto</label>
                        <div class="custom-file">
                            
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <br>
                <button type="button" class="btn btn-primary">Registrar Nuevo Producto</button>
                
            </form> 
        </div>
            
        
    </div>
</div>