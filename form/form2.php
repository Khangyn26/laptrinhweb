<!DOCTYPE html>
<html>
<head>
  <title>Tính tổng 2 số</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<Style>
body {
  font-family: Arial, sans-serif;
  text-align: center;
}

input {
  margin: 10px;
  padding: 5px;
}

button {
  padding: 10px;
}
</Style>
  <form action="calculate.php" method="post">
    <input type="text" name="number1" placeholder="Nhập số thứ nhất">
    <input type="text" name="number2" placeholder="Nhập số thứ hai">
    <button type="submit">Tính tổng</button>
  </form>
  <?php
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];
  $sum = $number1 + $number2;
  ?>
</body>
</html>