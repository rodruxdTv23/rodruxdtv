<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuariobd";

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


     
      

        <div class="boxses">
        <h2>Inicia sesión</h2>

        <table>
        <main>
        <form action="tablas.php" name='ej' method="post"> 
          <tr>
          <td><label>Usuario</label></td>
                <td><input type="text" name="usuario" placeholder="Ingresa tu usuario"></br></td>                               
                </tr>  

                    <tr>
                <td><label>Contraseña</label></td>
                <td><input type="text" name="contra" placeholder="Ingresa tu contraseña">                              </td>
                </tr>
                <tr>
                <td><input type="submit" name="boton"  value="Aceptar">  </td>
                </tr>
        </form>
        </main>
        </table>
      </div>

       

</body>
</html>

<?php

if(isset($_POST['boton'])){

  $usu=$_POST['usuario'];
  $cont=$_POST['contra'];

  $inser = "INSERT INTO usuariotb VALUES ('$usu', '$cont')";

  $ejec = mysqli_query ($conn, $inser);

}
?>