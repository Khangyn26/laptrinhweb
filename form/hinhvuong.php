<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cau2</title>
</head>
<style>
   form{
    margin-left: 38%;
    font-size: 20px;
    margin-top: 15px;
   }
   table{
    padding : 10px;
   }
   table tr td{
    padding: 10px;
   }
#tinh{
    background-color: #3333FF;
    border-radius: 5px;
    font-size: 15px;
    border: none;
    padding: 5px;

}

#nhapso{
    font-size: 18px
}
#loi{
    border: solid #FFCC33 2px;
    font-size: 18px;
    margin-left: 29%;
    margin-top: 5%;
}

</style>
<body>
    
    
<?php
    $dientich = null;
    $chieudaicanh = 0;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['chieudaicanh'])) {
            $chieudaicanh = $_POST['chieudaicanh'];
            if(is_numeric($chieudaicanh)) {
              $dientich = $chieudaicanh * $chieudaicanh;
            } else {
              print "<p>Vui lòng nhập giá trị số hợp lệ</p>";
            }
          } else {
            print "<p>Vui lòng nhập đủ thông tin</p>";
          }
    }
?>



    <form method="post">
    <table>
        <caption>Tính diện tích hình vuông</caption>
        <tr>
            <td>Chiều dài cạnh</td>
            <td><input type="text" name="chieudaicanh" id="nhapso" value="<?php print $chieudaicanh; ?>" required></td>
        </tr>
        <tr>
            <td><input id="tinh" type="submit" value="Tính diện tích"></td>
            <td><input  id="nhapso" type="text" name="tinhich" value="<?php print $dientich; ?>">
                
        </tr>
    </table>
      
    </form>
</body>