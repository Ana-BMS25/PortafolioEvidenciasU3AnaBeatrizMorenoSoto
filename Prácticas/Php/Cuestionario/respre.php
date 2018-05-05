
<html>
<head>
  <title></title>

  <?php
  $pregunta[1] = "¿Cuanto es 2x2?";
  $pregunta[2] = "¿Quien descubrio America?";
  $pregunta[3] = "¿Cuanto es 1558-565?";
  $pregunta[4] = "Nombre del actor que interpreta a Harry Potter";
  $pregunta[5] = "Nombre de la escuela donde estudia Harry Potter";
  ?>

  <?php $resultado = $_POST;?>
  <?php $elec = $resultado['num'];?>

  <?php
  echo "Pregunta: ".$pregunta[$elec];
  ?>

</head>

<body>
  <form action="resul.php" method="post" source="this">
    <label for="resul">
      <input style="display:none;" type="text" name="num" value="<?php echo $elec; ?>">
        <input type="text" name="resul" id="resul">
    </label>
    <input type="submit">
  </form>
</body>
</html>
