
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../bootstrap/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  


 <nav class="navbar navbar-dark navbar-expand-lg bg-primary" style="background-color: #232323 !important;;">
  
  <img src="../imagen/logo-welldex.png" alt="" width="300" height="80">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../vista/index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../vista/Formulario.php">Insertar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../vista/contenedores.php">Contenedores</a>
      </li>
    
    </ul>
  </div>
  
</nav>
<br>
    <title>Formulario</title>
</head>
<body>

<div class="container">
<h4 style="text-align: center"> Formulario</h4>
<form action="../control/insertar_contenedor.php" method="POST" enctype="multipart/form-data">
<p class="p-title-0">Número de contenedor (folio alfanumérico):</p>
<input class="form-control form-control-md" name="numero" type="text" style="text-align: center" value="" >
	 <br>
   <p class="p-title-0">Tipo de contenedor:</p>
<input class="form-control form-control-md" name="tipo" type="text" style="text-align: center" value="" >
	 <br>
   <p class="p-title-0">Dimensiones:</p>
<input class="form-control form-control-md" name="dimensiones" type="text" style="text-align: center" value="" >
	 <br>
   <p class="p-title-0">Fecha de descargo:</p>
<input class="form-control form-control-md" name="fecha_descargo" type="date" style="text-align: center" value="" >
	 <br>
		<div>
	</div>
    <center>    
    <button class="btn btn-primary" type="submit">Confirmar</button>
    </center>
    
			
		</form>
	</div>
</body>
</html>