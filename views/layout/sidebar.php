 <!--SIDEBAR-->
 <div class="container-fluid row pr-4">
    <div class="col-md-3">
        <div class="card  ml-3 mt-3 mb-3" >
            <div class="card-body p-0">
                <!--si la sesion no existe vamos a mostrar el login-->
                <?php if(!isset($_SESSION['usuario'])):?> 
                    
                    <div class="card-header text-white bg-dark m-0"><h4>Log in</h4></div>
                        <div class="p-3">
                            <form action="<?php echo base_url;?>usuario/login" method="POST" class="">
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating">Email</label>
                                    <input type="email" name="email" id="" class="form-control in" >
                                </div>
                                <div class="form-group">
                                    <label for="password" class="bmd-label-floating">Password</label>
                                    <input type="password" name="password" id="" class="form-control in" >
                                </div>
                                <?php if(isset($_SESSION['error_login'])): ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Correo o contraseña invalidos.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    
                                <?php endif; ?>
                                <?php Utils::deleteSession('error_login');?>
                                <div class="form-group">
                                    <button class="btn btn-raised btn-success btn-sm btn-block " type="submit">Ingresar</button>
                                </div>
                            </form>
                        </div> 
                    
                <?php else:?>
                    <!--si la sesion ya existe vamos a mostrarlos datos de usuario-->
                    <div class="card-header text-white bg-dark m-0"><h4><?php echo $_SESSION['usuario'][0][1].' '.$_SESSION['usuario'][0][2];?></h4></div>
                    <div class="p-3">
                        <p><?php echo $_SESSION['usuario'][0][3];?></p>
                    </div>
                <?php endif;?>
            </div>
        </div>


        <div class="list-group ml-3 bg-dark">
                <a href="#" class="list-group-item list-group-item-action active  bg-dark"> Mis pedidos</a>
                <?php if(isset($_SESSION['admin'])):?>
                    <a href="#" class="list-group-item list-group-item-action active  bg-dark">Gestionar Pedidos</a>
                    <a href="#" class="list-group-item list-group-item-action active  bg-dark">Gestionar Categorias</a>
                <?php endif; ?>
                <a href="<?php echo base_url?>usuario/cerrar_sesion" class="list-group-item list-group-item-action active  bg-dark">Cerrar Sesion</a>
        </div>
    </div>
    <div class="col-md-9 mt-3 p-0">
        <div class="card ">
            <div class="card-body m-3">