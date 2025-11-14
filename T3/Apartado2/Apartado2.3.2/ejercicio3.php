<?php
   session_start();
?>
<!DOCTYPE html> 
<html lang=”es”>
   <body> 
      <?php
         if (!isset($_SESSION["usuario"])){ 
            echo "La sesión ya no está activa";
         } 
      ?>
   </body> 
</html>