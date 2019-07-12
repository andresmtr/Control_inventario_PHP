<?php
if (isset($_POST["submit"]))

{

            $Cod = $_POST["Cod"];
            $Nom = $_POST["Nom"];
            $Pes = $_POST["Pes"];
            $Mar = $_POST["Mar"];
            $Fab = $_POST["Fab"];


            $contenido = "
            Codigo: $Cod
            Nombre: $Nom
            Peso: $Pes
            Marca: $Mar
            Fabricante: $Fab
            ";

            $archivo = fopen("Archivos/$Cod.txt","w");
            fwrite($archivo,$contenido);
            
}
?>


<HTML>
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
    </center>



    <br>
    <br>
    <br>
    <br>
    <br>



      <form action="Reportes.php" method="post">
        
            Código de producto: <br>
            <input type="text" name="Cod"/><br><br>
            Nombre del producto: <br>
            <input type="text" name="Nom" /><br><br>
            Peso: <br>
            <input type="text" name="Pes" /><br><br>
            Marca del producto<br>
            <input type="text" name="Mar" /><br><br>
            Fabricante: <br>
            <input type="text" name="Fab" /><br><br>
            

            <tr><tr><td><input type="submit" name="submit" value="Exportar"> </td><br><br><br>

      </form>


<a  class="boton_personalizado" href="pdf.php">Reporte en PDF</a><br><br><br><br>


<br>

 <br>
 <br>


</section>
   


 <footer>
  



</footer>


<!-- Main -->



</div>

</BODY>
</HTML>