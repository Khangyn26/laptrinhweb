<?php

//2. Lập trình PHP xử lý yêu cầu sau: (4 điểm)
//Cho mảng các số nguyên sau: $arr = [15, 25, 5, 7, 9, 4, 8, 10, 15]
//Hãy sắp xếp các số chẵn trong mảng giảm dần, các số còn lại giữ nguyên vị trí. Hãy hiển thị mảng
//sau khi sau khi đã sắp xếp
//Ví dụ kết quả là: 15 25 5 7 9 10 8 4 15 (đúng như kết quả này thì đạt điểm, ngược
//lại 

$arr = [15, 25, 5, 7, 9, 4, 8, 10, 15];
$sochan = [];

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        $sochan[] = $arr[$i];
    }
}

$chieudaisochan = count($sochan);
for ($i = 0; $i < $chieudaisochan; $i++) {
    for ($j = $i + 1; $j < $chieudaisochan; $j++) {
        if ($sochan[$i] < $sochan[$j]) {
            $bientam = $sochan[$i];
            $sochan[$i] = $sochan[$j];
            $sochan[$j] = $bientam;
        }
    }
}

$sochan1 = 0;
$chieudaicuamang = count($arr);
for ($i = 0; $i < $chieudaicuamang; $i++) {
    if ($arr[$i] % 2 == 0) {
        $arr[$i] = $sochan[$sochan1];
        $sochan1++;
    }
}

foreach ($arr as $number) {
    print $number . " ";
}

