<?php
$fecha = $_POST['fecha'];


echo "$fecha" ;



?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <title>Listar</title>

   <link href="https://jdmr10.github.io/pdw2/css/metro.css" rel="stylesheet">
    <link href="https://jdmr10.github.io/pdw2/css/metro-icons.css" rel="stylesheet">
    <link href="https://jdmr10.github.io/pdw2/css/metro-responsive.css" rel="stylesheet">

    <script src="https://jdmr10.github.io/pdw2/js/jquery-2.1.3.min.js"></script>
    <script src="https://jdmr10.github.io/pdw2/js/metro.js"></script>
  </head>
    <body>
       <div class="app-bar">
    <a class="app-bar-element" href="#">Home</a>

    <span class="app-bar-divider"></span>

     <ul class="app-bar-menu">
        <li><a href="page.html">registar</a></li>
        <li><a href="estado.html">Cambiar Estado</a></li>
        <li><a href="modificar.html">modificar</a></li>
        <li><a href="eliminar.html">Cancelar</a></li>
        <li><a href="reprogramar.html">Reprogramar</a></li>
        <li><a href="listar.html">Lista</a></li>
    </ul>
</div> 
<?php
//Se abre una  conexion con el servidor
  $con = new mysqli("localhost","root","","medico");
  //Se verifica que no haya error de conexión
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
    $resultado = mysqli_query($con,"SELECT * FROM citas");
    echo "<table class='table bordered' border ='1'>";
    echo "<tr>";
    echo "<th>FECHA</th>";
    echo "<th>NOMBRE</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_row($resultado))  {
       $cod   = $row[0];
       $nom =   $row[1];
       echo "<tr>";
       echo "<td>$row[0]</td>";
       echo "<td>$row[1]</td>";
       echo "</tr>";
    }
    echo "</table>";
    ?>
    </body>
            </html>