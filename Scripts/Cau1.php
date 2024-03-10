<?php

//2. Lập trình PHP xử lý yêu cầu sau: (4 điểm)
//Cho mảng các số nguyên sau: $arr = [15, 25, 5, 7, 9, 4, 8, 10, 15]
//Hãy sắp xếp các số chẵn trong mảng giảm dần, các số còn lại giữ nguyên vị trí. Hãy hiển thị mảng
//sau khi sau khi đã sắp xếp
//Ví dụ kết quả là: 15 25 5 7 9 10 8 4 15 (đúng như kết quả này thì đạt điểm, ngược
//lại 

$arr = [15, 25, 5, 7, 9, 4, 8, 10, 15];
$chieu_dai_cua_mang = COUNT($arr);

for($i=$chieu_dai_cua_mang -1; $i >= 0; $i-- ){   
    for ($j=$i-1; $j >=0; $j--){
        $bientam = $arr[$i];
        if ($arr[$i] < $arr[$j]){
            $arr[$i] = $arr[$j];
            $arr[$j] = $bientam;
        }
    }
}

for($i=$chieu_dai_cua_mang -1; $i >=0 ; $i--){
    if($arr[$i] % 2 == 0){

    
    print $arr[$i]. " ";
}
}
