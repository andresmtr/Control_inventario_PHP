 <!DOCTYPE html>
<HEAD>
  

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Gestión de inventarios</title>
    <!-- <style type="text/css" link=""></style>-->
    <link rel="stylesheet" type="text/css" href="css\style_app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href='img/IconPng.png' rel='shortcut icon' type='image/png'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(function() {
    var pull = $('#pull');
    menu = $('nav ul');
    menuHeight = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});

$(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});
</script>





</HEAD>

<BODY>




  <!-- Header -->

 <!--<font color="black"/>-->

<div class = "Contenedor">



<!-- HEADER-->

<header> 

<center>

<h2>Gestión de inventarios</h2>
</center>



<br>



<!-- NAV -->

<nav> 
  <ul>
    <li><a href="Adminstrador.php">Administrador</a></li>
    <li><a href="Ingreso.php">Ingreso de productos</a></li>
    <li><a href="Consulta.php">Consulta de productos</a></li>
    <li><a href="Actualizacion.php">Actualización de productos</a></li>
    <li><a href="Reportes.php">Reportes especiales</a></li>
    <li><a href="Operaciones.php">Operaciones matemáticas</a></li><br clear="all" />
  </ul>
  <a id="pull" href="#">Menu</a>
</nav> 




<br>
</header>



<section>
	<center>
       <a class="boton_personalizado" href="Menu.php">Menu</a>


<br>

<br>

<br>


<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad_301127_41";


   $s_codigo    =$_POST['Cod2'];
   $s_nombre		=$_POST['Nom2'];  
   $s_peso		=$_POST['Pes2'];
   $s_marca		=$_POST['Mar2'];
   $s_fabricante		=$_POST['Fab2'];
   $s_caracteristicas		=$_POST['Car'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE Producto SET  Nombre='$s_nombre', Psso='$s_peso', Marca='$s_marca', Fabricante='$s_fabricante', Caracteristicas='$s_caracteristicas' WHERE Codigo='$s_codigo'";

if (mysqli_query($conn, $sql)) {
    echo "Información actualizada satisfactoriamente";
} else {
    echo "Error actualizando la información: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 


<br>
<br>
<br>
<br>
<br>
<a class="boton_personalizado" href="Actualizacion.php">Actualizar mas productos</a></CENTER>
</center>

<br>
</section>
   


 <footer>
  



</footer>


<!-- Main -->



</div>

</BODY>
</HTML>







