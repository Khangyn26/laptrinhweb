
<?php

function isprime($n){
    if($n<2){
        return false;
    }
    for($i=2; $i<= sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
        return true;
    }
}

$arr = array (1, 5, 10, 2, 9, 45, 3, 7);
print "Các số nguyên tố trong mảng là: " ;
foreach ($arr as $songuyento){
    if (isprime($songuyento)){
        print $songuyento . " ";
    }
}

