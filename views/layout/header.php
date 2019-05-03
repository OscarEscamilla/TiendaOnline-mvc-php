<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>
    <link rel="stylesheet" href="<?php echo base_url?>assets/css/bootstrap.min.css" >
    <!--<link rel="stylesheet" href="<?php // echo base_url?>assets/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url?>assets/css/estilos.css">
</head>
<body class="container-fluid  p-0 m-0">
    <!--header-->
    <div class="container-fluid m-0 p-0">
        <div class="jumbotron m-0 p-1">
            <h5 class="display-5 text-center">Tienda Online</h5> 
        </div>
    </div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
            <a class="navbar-brand" href="#">Tienda</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php $menu = Utils::showCategorias(); ?>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                <?php foreach($menu as $row):?>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><?php echo $row['nombre']; ?></a>
                    </li>
                <?php endforeach; ?>

                </ul>
                
            </div>
        </nav>
    </div>
    
   
