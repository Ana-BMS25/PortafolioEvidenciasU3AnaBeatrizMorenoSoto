<html>
<head>
  <title>Conversiones</title>
</head>

<body>
<form action="conversiones.php" method="post" source="this">
  <label for="num">Ingresa un número:
      <input type="text" name="num" id="num" pattern="[0-9]+">
  </label>

  <select id="op" name="op">
    <option value="bin">Binario</option>
    <option value="hex">Hexadecimal</option>
  </select>
  <input type="submit">
</form>
</body>
</html>
