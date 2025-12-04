<!DOCTYPE html> 
<?php
   $nombre_cookie = "usuario";
   $valor_cookie = "María López Gómez";
   $clave_cookie = "clave";
   $valor_clave = "Qpf5n";

   setcookie($nombre_cookie, $valor_cookie, time() + 86400 * 30, "/");
   setcookie($clave_cookie, $valor_clave,  time() + 86400 * 30, "/");

   $nuevo_valor_usuario = "Francisco Ruiz Martin";
   setcookie($nombre_cookie, $nuevo_valor_usuario, time() + 86400 * 30, "/");
?> 
<html>
   <head> 
      <title>Cookies</title>
   </head> 
   <body>
      <?php 

         if(!isset($_COOKIE[$nombre_cookie])) {
            echo "La cookie " . $nombre_cookie . " no se ha establecido aún!"; 
         }
         else {
            echo "El valor de la cookie " . $nombre_cookie . " es: " . $_COOKIE[$nombre_cookie];
         } 
         echo "</br>";

         if(!isset($_COOKIE[$clave_cookie])) {
            echo "La cookie " . $clave_cookie . " no se ha establecido aún!<br>"; 
         }
         else {
            echo "El valor de la cookie " . $clave_cookie . " es: " . $_COOKIE[$clave_cookie] . "<br>";
         }

         echo "<p>TODAS LAS COOKIES</p>";
         var_dump($_COOKIE);
    ?>
</body>
</html>