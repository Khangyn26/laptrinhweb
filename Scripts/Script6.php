<?php

$arr = array (1, 5, 10, 2, 9, 45, 3, 7);

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
    print $arr[$i]. " ";
}
