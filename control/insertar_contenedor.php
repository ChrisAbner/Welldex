
<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos ="welldex";

$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");


$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la Base de datos");


    //recuperar las variables
    $numero =$_POST["numero"];
    $tipo = $_POST["tipo"];
    $dimensiones =$_POST["dimensiones"];
    $fecha_descargo =$_POST["fecha_descargo"];


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
$sql="INSERT INTO contenedor 
(numero,tipo,dimensiones,fecha_descargo) 
VALUES ('$numero','$tipo','$dimensiones','$fecha_descargo')";

//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($conexion, $sql);
//verificacion de la ejecucioon
if(!$ejecutar){
    echo"Hubo algun error";
}else{
    echo"Datos guardado correctamente <br><a href='../index.php'>Volver</a>";
    
}
 
?>