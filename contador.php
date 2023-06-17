<?php
  $archivo_contador = "contador.txt"; // Archivo para almacenar el contador de visitas

  // Leer el contador actual desde el archivo
  $contador = file_get_contents($archivo_contador);

  // Incrementar el contador
  $contador++;

  // Guardar el nuevo contador en el archivo
  file_put_contents($archivo_contador, $contador);

  // Mostrar el contador en la página
  echo "Visitas: " . $contador;
?>
