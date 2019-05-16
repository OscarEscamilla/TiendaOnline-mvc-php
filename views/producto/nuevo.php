<div class="card-header text-white m-0"><h4>Nuevo Producto</h4></div>
    <div class="row">
        <div class="col-md-12">
            <div class="p-3">
        
                <form action="<?php echo base_url;?>producto/save" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control-sm in" >
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="" cols="30" rows="5" class="form-control-sm in"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label class="control-label" for="stock">Stock</label>
                            <input type="number" name="stock" class="form-control-sm in" >
                        </div>
                        <div class="col">
                            <label class="control-label" for="categoria">Categoria</label>
                            <select name="categoria" id="" class="form-control-sm in">
                            <?php $categoria = Utils::showCategorias(); ?>
                            <?php foreach($categoria as $row):?>
                                <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['nombre']; ?>
                                </option>
                            <?php endforeach; ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <br>
                        <label class="control-label">Precio</label>
                        <div class="form-group">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="precio" class="form-control-sm in" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="imagen">Imagen del Producto</label>
                        <input type="file" name="imagen" class="form-control-sm" >
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" value="Guardar" class="btn btn-primary btn-sm" >
                    </div>
                </form>
            </div>
        </div>
    </div>

    