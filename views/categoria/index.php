<div class="card-header text-white bg-dark m-0"><h4>Categorias</h4></div>
<div class="p-3">
<div class="pl-15">
    <div class="row">
    
    <div class="col-md-8"></div>
    <div class="col-md-4">
    <form action="<?php echo base_url;?>categoria/save" method="POST" class="form-inline"> <!-- envia los datos  por post al CategoriacController metodo agregar -->
        <div class="form-group">
            <label for="nombre" class="bmd-label-floating">Añadir Categoria</label>
            <input type="text" name="nombre" id="" class="form-control in" >
        </div>
        <span class="form-group bmd-form-group"> <!-- needed to match padding for floating labels -->
            <button type="submit" class="btn btn-raised btn-primary ml-2">Añadir</button>
        </span>
    </form>
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    <?php if (isset($_SESSION['alert'])):?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        ¡Categoria guardada!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php Utils::deleteSession('alert'); ?>
    <?php endif; ?>
    <!-- tabla que muestra todas las categoria -->
   
        <table class="table table-striped">
            <thead >
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
               
                    <?php foreach ($result as $row):?> 
                        <tr>
                            <th scope="row"><?php echo $row['id'];?></th>
                            <td><?php echo $row['nombre'];?></td>
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