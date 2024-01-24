<?php
$arr = array(1,5,10,2,9,45,3,7);

$chieu_dai_mang = count ($arr);

for($i=0; $i<$chieu_dai_mang; $i++){

    for($j = $i+1; $j < $chieu_dai_mang -1; $j++){

        $bientam = $arr[$i];
        if ($arr[$i] > $arr[$j]){
            $arr[$i] = $arr[$j];
            $arr[$j] = $bientam;
        }
    }
}

for ($i = 0; $i < $chieu_dai_mang; $i++){
    print $arr[$i]. " ";
}