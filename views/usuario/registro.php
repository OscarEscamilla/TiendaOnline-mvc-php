<h5 class="mb-3">Registrate</h5>

<?php
  

    if (isset($_SESSION['registro'])) {


        if($_SESSION['registro'] == 'completado'){

            $alerta = 'success';
            
        }elseif ($_SESSION['registro'] == 'fallido') {
            
            $alerta = 'danger';
            
        }
        echo "<div class='alert alert-".$alerta." alert-dismissible fade show' role='alert'>
                <strong>Registro ".$_SESSION['registro']."</strong> 
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
    }

    Utils::deleteSession('registro');
?>


<form action="<?php echo base_url?>usuario/save"  method="POST" class="">
    <div class="form-group">
        <label class="col-form-label col-form-label-sm" for="nombre">Nombre</label>
        <input type="text" class="form-control-sm in" name="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label class="col-form-label col-form-label-sm" for="apellidos">Apellidos</label>
        <input type="text" class="form-control-sm in" name="apellidos" placeholder="Apellidos">
    </div>
    <div class="form-group">
        <label class="col-form-label col-form-label-sm" for="email">Email</label>
        <input type="email"  class="form-control-sm in" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label class="col-form-label col-form-label-sm" for="password">Password</label>
        <input type="password"  class="form-control-sm in" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <br>
        <input type="submit" value="Registrarme" class="btn btn-info btn-sm ">
    </div>
</form>