
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
      <li class="nav-item active">
        <a class="nav-link" href="../vista/Formulario.php">Insertar</a>
      </li>
      <li class="nav-item">
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
<form  action="../control/insertar.php" method="POST" enctype="multipart/form-data">
<p class="p-title-0">Referencia (Folio o llave):</p>
<input class="form-control form-control-md" name="folio" type="text" style="text-align: center" value="" >
	 <br>
   <p class="p-title-0">Pedimento:</p>
<input class="form-control form-control-md" name="pedimento" type="text" style="text-align: center" value="" >
	 <br>
   <p class="p-title-0">Cliente:</p>
<input class="form-control form-control-md" name="cliente" type="text" style="text-align: center" value="" >
	 <br>
   <p class="p-title-0">Aduana:</p>
<input class="form-control form-control-md" name="aduana" type="text" style="text-align: center" value="" >
	 <br>
		<p class="p-title-0">Patente:</p>
		<input class="form-control form-control-md" name="patente" type="text" style="text-align: center" value="" >
		<br>
   <p class="p-title-0">Tipo de mercancía:</p>
   <select class="form-select" name="tipo_mercancia">
  <option selected></option>
  <option value="1">Contenedor</option>
  <option value="2">Carga suelta</option>
</select>
<br>
    <p class="p-title-0">Tipo de operación:</p>
   <select class="form-select" name="tipo_operacion" id="tipo_operacion" onchange="showInp()">
    <option value=""></option>
    <option value="1,0">Importación</option>
    <option value="2,3">Exportación</option>
   
    
  </select>
  
  <input  class="form-control form-control-md" name="fecha_arribo" id="1" type="date" placeholder="Fecha de arribo" style="display: none"/>
  <input  class="form-control form-control-md" name="pais_origen" id="0" type="text" placeholder="País de origen" style="display: none"/>

  <input  class="form-control form-control-md" name="fecha_zarpe" id="2" type="date" placeholder="Fecha de zarpe" style="display: none"/>
  <input  class="form-control form-control-md" name="pais_destino" id="3" type="text" placeholder="País de destino" style="display: none"/> 
 
<br>
<p class="p-title-0">Estatus:</p>
		<input class="form-control form-control-md" name="estatus" type="text" style="text-align: center" value="" >
		<br>


    
  <script>
    
function showInp(){
  var getSelectValue = document.getElementById("tipo_operacion").value;

  if(getSelectValue=="1,0"){
    document.getElementById("1").style.display = "inline-block";
    document.getElementById("0").style.display = "inline-block";
  }
   if(getSelectValue=="2,3"){
    document.getElementById("2").style.display = "inline-block";
    document.getElementById("3").style.display = "inline-block";
  }
  

}

if( document.getElementById("tipo_operacion").value === "1,0"){
  document.getElementById("1").addAttribute("required");
  document.getElementById("0").addAttribute("required");
  
}

if( document.getElementById("tipo_operacion").value === "2,3"){
  document.getElementById("2").addAttribute("required");
  document.getElementById("3").addAttribute("required");
  
}

    </script>
		<div>
	</div>
    <center>    
    <button class="btn btn-primary" type="submit">Confirmar</button>
   <script>
     function validar(e) {
    swal({
        title: "Buen trabajo!", 
        text: "Clickeaste en el boton!", 
        type: "success"
    }).then(function () {
        console.log(action="../control/insertar.php");
    })
    return false;
}
     </script>
    </center>
    
			
		</form>
	</div>
</body>
</html>