<div id="ShoppingCart" class="ShoppingCart">
    <div class="container ">
        <h1>Carrito de compras <i class="fa fa-shopping-cart" aria-hidden="true"></i></h1>   
        <table class="table Cart">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><img src="assets/img/img1.jpg" alt=""></th>
                    <td>Nike AIR FORCE ONE</td>
                    <td>2</td>
                    <td>$500</td>
                    <td>$1000</td>
                </tr>
                <tr>
                    <th scope="row"><img src="assets/img/img2.jpg" alt=""></th>
                    <td>Nike AIR FORCE ONE</td>
                    <td>3</td>
                    <td>$450</td>
                    <td>$1350</td>
                </tr>
                <tr>
                    <th scope="row"><img src="assets/img/img3.jpg" alt=""></th>
                    <td>Nike AIR FORCE ONE</td>
                    <td>2</td>
                    <td>$500</td>
                    <td>$1000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Total</th>
                    <th scope="col">$ 3350</th>
                </tr>
            </tfoot>
        </table>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg " data-toggle="modal" data-target="#modelId">
          Confirmar Compra
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmar Compra</h5>        
                        </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <table class="table Cart">    
                                <thead>
                                    <tr>
                                        
                                        <th scope="col">Producto</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nike AIR FORCE ONE</td>
                                        <td>2</td>
                                        <td>$500</td>
                                        <td>$1000</td>
                                    </tr>
                                    <tr>
                                        <td>Nike AIR FORCE ONE</td>
                                        <td>3</td>
                                        <td>$450</td>
                                        <td>$1350</td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Nike AIR FORCE ONE</td>
                                        <td>2</td>
                                        <td>$500</td>
                                        <td>$1000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Total</th>
                                        <th scope="col">$ 3350</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
