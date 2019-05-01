<div class="card-header text-white bg-dark m-0"><h4>Categorias</h4></div>
<div class="p-3">
<div class="pl-15">
    <div class="row">
    
    <div class="col-md-8"></div>
    <div class="col-md-4">
    <form action="<?php echo base_url;?>categoria/agregar" method="POST" class="form-inline"> <!-- envia los datos  por post al CategoriacController metodo agregar -->
        <div class="form-group">
            <label for="email" class="bmd-label-floating">Añadir Categoria</label>
            <input type="email" name="email" id="" class="form-control in" >
        </div>
        <span class="form-group bmd-form-group"> <!-- needed to match padding for floating labels -->
            <button type="submit" class="btn btn-raised btn-primary ml-2">Añadir</button>
        </span>
    </form>
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
    
    <!-- tabla que muestra todas las categoria -->

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Last</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <a href="<?php echo base_url;?>/categoria/update"><img src="<?php echo base_url;?>assets/img/icon-update.svg" style="whidt: 3px; "alt=""></a>
                    <a href="<?php echo base_url;?>/categoria/delete"><img src="<?php echo base_url;?>assets/img/icon-delete.svg" alt=""></a>
                </td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>    
    
    </div>
    
    </div>
    
</div>

</div>