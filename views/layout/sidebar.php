 <!--SIDEBAR-->
 <div class="row m-2">
    <div class="col-md-3 p-0">
        <div class="card mt-3 mb-3 mr-2" >
            <div class="card-body p-0">
                <!--si la sesion no existe vamos a mostrar el login-->
                <?php if(!isset($_SESSION['usuario'])):?> 
                    
                    <div class="card-header text-white  m-0"><h4>Log in</h4></div>
                        <div class="p-3">
                            <form action="<?php echo base_url;?>usuario/login" method="POST" class="">
                                <div class="form-group">
                                    <input type="email" name="email" id="" class="form-control-sm in"  placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="" class="form-control-sm in" placeholder="Password">
                                </div>
                                <?php if(isset($_SESSION['error_login'])): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
                                <a href="<?php echo base_url?>usuario/registro" >Registrarme</a>
                            </form>
                        </div> 
                    
                <?php else: ?>
                    <!--si la sesion ya existe vamos a mostrarlos datos de usuario-->
                    <div class="card-header text-white user m-0"><h4><?php echo $_SESSION['usuario'][0][1].' '.$_SESSION['usuario'][0][2];?></h4></div>
                    <div class="p-3">
                        <p><?php echo $_SESSION['usuario'][0][3];?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if(isset($_SESSION['usuario'])):?>
            <div class="list-group  mr-2">
        <?php endif; ?>
                <?php if(isset($_SESSION['admin'])):?>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">Gestionar Pedidos</a>
                    <a href="<?php echo base_url; ?>categoria/index" class="list-group-item list-group-item-action bg-dark">Gestionar Categorias</a>
                    <a href="<?php echo base_url; ?>producto/gestion" class="list-group-item list-group-item-action bg-dark">Gestionar Productos</a>
                <?php endif; ?>
                <?php if(isset($_SESSION['usuario'])):?>
                <a href="#" class="list-group-item list-group-item-action bg-dark"> Mis pedidos</a>
                <a href="<?php echo base_url; ?>usuario/cerrar_sesion" class="list-group-item list-group-item-action bg-dark">Cerrar Sesion
                <img src="<?php echo base_url; ?>assets/img/logout.svg" alt="" class="icon ml-2">
                </a>
                <?php endif; ?>
        <?php if(isset($_SESSION['usuario'])):?>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-md-9 mt-3 p-0">
        <div class="card content">
            <div class="card-body m-0 p-0">