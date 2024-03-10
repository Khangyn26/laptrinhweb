<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cau2</title>
</head>
<style>
   form{
    margin-left: 40%;
   }
</style>
<body>
    
    
    <?php
    $result = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
        $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
        $result = $num1 * $num2;
    }
    ?>

    <form method="post">
    <table>
        <caption>Tính thích hai số</caption>
        <tr>
            <td>Số a</td>
            <td><input type="text" name="num1" required></td>
        </tr>
        <tr>
            <td>Số b</td>
            <td><input type="text" name="num2" required></td>
        </tr>
        <tr>
            <td><input class="tinhtong" type="submit" value="Tính Tích"></td>
            <td><input  class="tinhhieu" type="text" name="tinhtong" value="<?php echo $result; ?>">
                <?php endif; ?></td>
        </tr>
    </table>
      
    </form>
</body>