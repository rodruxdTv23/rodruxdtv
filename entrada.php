<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdtabla";

$conn = mysqli_connect($servername, $username, $password, $dbname);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="php/usuario.php">
    <title>Inicia Sesión</title>
</head>
<body>

<header class="enca">
        <div class="logoo">
        <a href="index.html"> <img src="img/logo.png" alt="logo empresa"> </a> 
        </div>

        <div class="titt">
        <h1 class="titulo"> Empresa AIS MACKMOD </h1>
        </div>

        
    </header>

<div class="bg">
    <nav class="menuprin contenedor">
        <a href="mision.html">Misión y Visión </a>        
        <a href="nosotros.html">Acerca de nosotros</a>
        <a href="contacto.html">Contacto</a>
        

    </nav>
</div>


      <div class="tituloinicia">
      <h2>Inicia sesión</h2>

        <div class="box">
        
        <main>
        <form action="#" name='ej' method="post">          
                <label>PRODUCTO</label>
                <input type="text" name="producto" placeholder="Ingresa tu usuario"></br> 
                </br>                               
                <label>Cantidad</label>
                <input type="text" name="cantidad" placeholder="Ingresa "> </br> 
                </br>      
                <label>Precio</label>
                <input type="text" name="precio" placeholder="Ingresa ">  </br>
                </br>       
                <label>Proveedor</label>
                <input type="text" name="proveedor" placeholder="Ingresa tu ">    </br>  
                </br>   

                <input type="submit" name="boton"  value="Aceptar">  
                
        </form>
        </main>
      </div>

        </div>

</body>
</html>

<?php

if(isset($_POST['boton'])){

  $producto=$_POST['producto'];
  $cantidad=$_POST['cantidad'];
  $precio=$_POST['precio'];
  $proveedor=$_POST['proveedor'];

  $inser = "INSERT INTO tablaempresa (producto, cantidad, precio, proveedor)VALUES ('$producto', '$cantidad', '$precio', '$proveedor')";

  $ejec = mysqli_query ($conn, $inser);

}
?>