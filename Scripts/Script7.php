//Tạo scripts/script7.php để tìm số lớn nhất trong mảng
Cho mảng giá trị sau: $arr = array (1, 5, 10, 2, 9, 45, 3, 7)
Viết chương trình hiển thị các giá trị trong mảng lớn nhất
45


<?php

$arr = array(1, 5, 10, 2, 9, 45, 3, 7);
$max_value = max($arr);
echo "Giá trị lớn nhất trong mảng là: " . $max_value;