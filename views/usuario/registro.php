
<div class="card-header text-white bg-dark m-0"><h4>Registrate</h4></div>
<?php
  

    if (isset($_SESSION['registro'])) {


        if($_SESSION['registro'] == 'completado'){

            $alerta = 'success';
            
        }elseif ($_SESSION['registro'] == 'fallido') {
            
            $alerta = 'danger';
            
        }
        echo "<div class='alert alert-".$alerta." alert-dismissible fade show m-3' role='alert'>
                <strong>Registro ".$_SESSION['registro']."</strong> 
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
    }

    Utils::deleteSession('registro');
?>

<div class="p-5">

<form action="<?php echo base_url?>usuario/save"  method="POST" class="">
    <div class="form-group">
        <label class="bmd-label-floating" for="nombre">Nombre</label>
        <input type="text" class="form-control in" name="nombre" >
    </div>
    <div class="form-group">
        <label class="bmd-label-floating" for="apellidos">Apellidos</label>
        <input type="text" class="form-control in" name="apellidos" >
    </div>
    <div class="form-group">
        <label class="bmd-label-floating" for="email">Email</label>
        <input type="email"  class="form-control in" name="email" >
    </div>
    <div class="form-group">
        <label class="bmd-label-floating" for="password">Password</label>
        <input type="password"  class="form-control in" name="password" >
    </div>
    <div class="form-group">
        <br>
        <input type="submit" value="Registrarme" class="btn btn-raised btn-primary btn-sm ">
    </div>
</form>

</div>
