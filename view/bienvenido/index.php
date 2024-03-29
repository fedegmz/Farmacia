<?php 

if(isset($_SESSION['user'])){
}
else{
    return header("Location:". base_url);
    exit();
}
if($_SESSION['userRol'] != 'admin'){
    header("Location:".base_url. "cobrar/index");
  } 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?=base_url?>view/asset/css/main.css">
  <link rel="stylesheet" href="<?=base_url?>view/asset/css/style.css">
  <link rel="stylesheet" href="<?=base_url?>view/asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url?>view/asset/fontawesome/css/all.min.css">   
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>
<body>
<nav class="navbar navbar navbar-dark bg-primary navbar-expand-sm ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ul-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#"> <strong> Bienvenido: <?= $_SESSION['user']?> <?=$_SESSION['userLastName']?>  <?=$_SESSION['userRol']?> </strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url?>usuario/deleteSessionLogin"><i class="fas fa-power-off"></i></a>
      </li>
    </ul>
  </div>
</nav>


<h1 class="display-4 text-center mt-5">FARMACIA</h1>


<div class="contenedor">


		<section class="contenido">
        <a href="<?=base_url?>usuario/cajero" class="boton-1">Cajeros<i class="fas fa-cash-register"></i></a>
                <a href="<?=base_url?>historial/index" class="boton-2">Historial<i class="fas fa-history"></i></a>
			<a href="<?=base_url?>entrada/index" class="boton-3"> Entradas <i class="fas fa-person-booth"></i></a>
			<a href="<?=base_url?>inventario/index" class="boton-4"> Inventario<i class="fas fa-boxes"></i></a>
			<a href="<?=base_url?>registro/index" class="boton-5"> Registro <i class="fab fa-product-hunt"></i></a>
            <a href="<?=base_url?>inventario/igualacion" class="boton-6">Igualación<i class="fas fa-database"></i></a>

           
		</section>
	</div>
    

</body>
<script src="<?=base_url?>js/jquery.js"></script>
<script src="<?=base_url?>view/asset/bootstrap/js/bootstrap.min.js"></script>
</html>