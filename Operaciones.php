<?php
   if (isset($_POST["submit"]))

   {

      switch ($_POST["operador"]) {
          case 'suma':
              $resultado = $_POST["numero1"] + $_POST["numero2"];
              break;

          case 'resta':
              $resultado = $_POST["numero1"] - $_POST["numero2"];
              break;

          case 'multiplicacion':
              $resultado = $_POST["numero1"] * $_POST["numero2"];
              break;

          case 'division':
          if ($_POST["numero2"]==0) 
          {
              $resultado = "No es posible dividir entre cero.";
          }

          else
          {
              $resultado = $_POST["numero1"] / $_POST["numero2"];
              break;
          }   
      }

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
    
    <br>
    <br>
    <br>

<p>1. Switch case</p>

    <br>
    <br>



      <form action="Operaciones.php" method="post">
        <table>
            <tr><td>Numero 1</td><td></td><td>Numero 2</td><td></td></tr>
            <tr><td><input type="text" name="numero1" /></td>
            <td>
                <select name="operador">
                    <option value="suma">+</option>
                    <option value="resta">-</option>
                    <option value="multiplicacion">*</option>
                    <option value="division">/</option>
                </select>
            </td>
            <td><input type="text" name="numero2" /></td>
            <td><input type="submit" name="submit" value="calcular"> </td>
        </tr>
        </table>
      </form>


<br>

 <br>


 <?php
if (isset($resultado)) {


 echo "El resultado es: {$resultado} ";
}



 ?>

<br>
<br>


<p>2. If-else</p>

<br>
<br>

<?php



if (isset($_POST["submit"]))

   {

if ($_POST["numero1"]==$_POST["numero2"]) 
          {
              $resultado2 = "Los numeros son iguales";
          }

elseif ($_POST["numero1"]>$_POST["numero2"]) 
          {
              $resultado2 = "Numero 1 es mayor que numero 2";
          }


elseif ($_POST["numero1"]<$_POST["numero2"]) 
          {
              $resultado2 = "Numero 2 es mayor que numero 1";
          }

}
?>

 <?php
if (isset($resultado2)) {

 echo "{$resultado2} ";
}

?>

<br>
<br>

<p>3. For y while</p>

<br>
<br>


 <?php
$aumento = 1;
while ( $aumento<= 41) {
  echo $aumento."<br>";
  $aumento++;
}

?>



<p>4. Array</p>

    <br>
    <br>



      <form action="Operaciones.php" method="post">
            Numero 1:<br>
            <input type="text" name="N1" /><br><br>
            Numero 2: <br>
            <input type="text" name="N2" /><br><br>
            Numero 3: <br>
            <input type="text" name="N3" /><br><br>
            Numero 4: <br>
            <input type="text" name="N4" /><br><br>
            Numero 5: <br>
            <input type="text" name="N5" /><br><br>

                
            <input type="submit" name="mult" value="Multiplicar">

            <br><br>



      </form>


 <?php
// Comprobar si el formulario fue enviado (si el array asociativo '$_POST' no está vacío)
     if( empty($_POST ) == true )
    {
        // El formulario no ha sido enviado
    }
    else
    {
function Multiplicar($num1, $num2, $num3, $num4, $num5){
      $resultado2 = array(
         'nu1' => $num1 * 41,
         'nu2' => $num2 * 41,
         'nu3' => $num3 * 41,
         'nu4' => $num4 * 41,
         'nu5' => $num5 * 41,
      );
      return $resultado2;
   }
   $resultado_mult_array = Multiplicar($_POST["N1"], $_POST["N2"], $_POST["N3"], $_POST["N4"], $_POST["N5"]);
   echo 'La multiplicacion del numero digitado ' .$_POST["N1"] . ', por 41 que es el numero del grupo es: ' . $resultado_mult_array['nu1'] . '<br />';
   echo 'La multiplicacion del numero digitado ' .$_POST["N2"] . ', por 41 que es el numero del grupo es: ' . $resultado_mult_array['nu2'] . '<br />';
   echo 'La multiplicacion del numero digitado ' .$_POST["N3"] . ', por 41 que es el numero del grupo es: '  . $resultado_mult_array['nu3'] . '<br />';
   echo 'La multiplicacion del numero digitado ' .$_POST["N4"] . ', por 41 que es el numero del grupo es: ' . $resultado_mult_array['nu4'] . '<br />';
   echo 'La multiplicacion del numero digitado ' .$_POST["N5"] . ', por 41 que es el numero del grupo es: ' . $resultado_mult_array['nu5'] . '<br />';

    }

?>

<br>

 <br>






</center>

</section>


 <footer>
  



</footer>


<!-- Main -->



</div>

</BODY>
</HTML>