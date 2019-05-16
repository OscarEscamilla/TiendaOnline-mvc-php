<div class="card-header text-white m-0"><h4>Gestion de productos</h4></div>
    <div class="p-5">
    <div class="row">
        <div class="col-md-12">
            <a clas="btn btn-primary" href="<?php echo base_url;?>producto/nuevo">Nuevo Producto</a>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12"> 
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach ($result as $row):?> 
                                <tr>
                                    <th scope="row"><?php echo $row['id'];?></th>
                                    <td><?php echo $row['nombre'];?></td>
                                    <td><?php echo $row['descripcion'];?></td>
                                    <td><?php echo $row['precio'];?></td>
                                    <td><?php echo $row['categoria'];?></td>
                                    <td>
                                        <a href="<?php echo base_url;?>/categoria/delete&id=<?php echo $row['id'];?>"><img src="<?php echo base_url;?>assets/img/icon-delete.svg" alt=""></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>