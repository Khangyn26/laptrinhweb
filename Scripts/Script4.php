<?php
$a = 10;
$b = 20;
$c = -30;

$delta = $b**2 - 4 * $a * $c;

if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    print "Phương trình có 2 nghiệm phân biệt: x1 = $x1 và x2 = $x2";
} elseif ($delta == 0) {
    $x = -$b / (2 * $a);
    print "Phương trình có nghiệm kép: x = $x";
} else {
    print "Phương trình vô nghiệm";
}
