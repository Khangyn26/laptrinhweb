<?php

//Tạo scripts/script10.php để in ra các số chính phương trong mảng
//Cho mảng giá trị sau: $arr = array (1, 5, 10, 2, 9, 45, 3, 7)
//Viết chương trình hiển thị các giá trị trong mảng là số chính phương

$arr = array (1, 5, 10, 2, 9, 45, 3, 7);

function isperfectsquare($n){
$canbac2cuan = sqrt($n);
return ($canbac2cuan * $canbac2cuan == $n);
}
print "Số chính phương trong mảng là: ";
foreach ( $arr as $sochinhphuong){
    if(isperfectsquare($sochinhphuong)){
        print $sochinhphuong . " ";
    }
}
