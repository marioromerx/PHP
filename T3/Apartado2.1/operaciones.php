<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultados</title>
</head>
<body>
  <p><?php echo "$n1 + $n2 = " . ($n1 + $n2); ?></p>
  <p><?php echo "$n1 - $n2 = " . ($n1 - $n2); ?></p>
  <p><?php echo "$n1 * $n2 = " . ($n1 * $n2); ?></p>
  <p><?php echo "$n1 / $n2 = " . ($n1 / $n2); ?></p>
  <p><?php echo "$n1 % $n2 = " . ($n1 % $n2); ?></p>
</body>
</html>
