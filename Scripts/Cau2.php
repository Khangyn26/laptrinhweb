<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form1</title>
</head>
<style>
   form{
    margin-left: 40%;
   }
</style>
<body>
    
    
    <?php
    $result = null;

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
        $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
        $result = $num1 * $num2;
    }
    ?>

    <form method="post">
    <h1>Tính tổng 2 số</h1>
        <label for="num1">Số a</label>
        <input type="text" name="num1" required>
        <br>
        <label for="num2">Số b</label>
        <input type="text" name="num2" required>
        <br>
        <input class="tinhtong" type="submit" value="Tính Tổng">
        <?php  if ($result !== null): ?>
        <input  class="tinhhieu" type="text" name="tinhtong" value="<?php echo $result; ?>">
    <?php endif; ?>
    </form>
</body>