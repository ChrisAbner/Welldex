
<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos ="welldex";

$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");


$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la Base de datos");


    //recuperar las variables
    $folio =$_POST["folio"];
    $pedimento = $_POST["pedimento"];
    $cliente =$_POST["cliente"];
    $aduana =$_POST["aduana"];
    $patente =$_POST["patente"];
    $tipo_mercancia =$_POST["tipo_mercancia"];
    $tipo_operacion =$_POST["tipo_operacion"];
    $fecha_arribo =$_POST["fecha_arribo"];
    $pais_origen =$_POST["pais_origen"];
    $fecha_zarpe =$_POST["fecha_zarpe"];
    $pais_destino =$_POST["pais_destino"];
    $estatus =$_POST["estatus"];

    //$Imagen = $_FILES["Imagen"]["name"]; 
    //$Ruta= $_FILES["Imagen"]["tmp_name"];
    
        //Con .. Inserta en carpeta cuando el archivo no esta
        //Sin .. Inserta en BD cuando el archivo esta
    //$Destino2="../Imagen/".$Imagen;
    //$Destino="Imagen/".$Imagen;
    //Warning: copy(): Filename cannot be empty in C:\xampp\htdocs\Tienda\Control\Agregar.php on line 27
    //copy($Ruta,$Destino2);
    // Precio= $_POST["Precio"];


 
//sentencia sql
$sql="INSERT INTO operacion 
(folio,pedimento,cliente,aduana,patente,tipo_mercancia,tipo_operacion,estatus) 
VALUES ('$folio','$pedimento','$cliente','$aduana','$patente','$tipo_mercancia','$tipo_operacion','$fecha_arribo','$pais_origen','$fecha_zarpe','$pais_destino','$estatus')";

//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($conexion, $sql);
//verificacion de la ejecucioon
if(!$ejecutar){
    echo"Hubo algun error";
}else{
    
    echo"Datos guardado correctamente <br><a href='../index.php'>Volver</a>";
    
}
 
?>