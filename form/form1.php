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
    font-size: 20px;
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

    $chieu_dai='';
    $chieu_rong='';
    $dien_tich='';
    if (isset($_POST['tinh_dien_tich'])){
        $chieu_dai = $POST['chieu_dai'];
        $chieu_rong = $POST['chieu_rong'];

    if (is_numeric($chieu_dai) && is_numeric($chieu_rong)) {
            $dien_tich = $chieu_dai * $chieu_rong;
        } else {
            $dien_tich = 'Vui lòng nhập số hợp lệ: ))';
        }
}
    
    ?>

    <form method="post">
    <table>
        
        <tr>
            <td>Chiều dài</td>
            <td><input type="text" name="chieu_dai" class="form-control" value="<?php print $chieu_dai; ?>" require></td>
        </tr>
        <tr>
            <td>Chiều rộng</td>
            <td><input type="text" name="chieu_rong"  class="form-control" value="<?php print $chieu_rong; ?>" require></td>
        </tr>
        <tr>
            <td>Diện tích : </td>
            <td><input class="dongcuoi" type="text" value="<?php print $dien_tich; ?>"></td>
                
        </tr>
        <tr>
        <td><input id="tinh" type="submit" value="Tìm diện tích"></td></td>
        </tr>
    </table>
      
    </form>
</body>

