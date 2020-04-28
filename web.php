<?php
$arr =
array ("a","b","c");
/* "a", "b" va "c" qiymatli massivni yaratamiz. Bu erda kalit ko‘rsatilmagan biroq mos
ravishda ular 0,1,2 bo‘ladi. */
print_r($arr); // massivni ekranga chiqaramiz (kaliti va qiymatini)
unset($arr[0]);
unset($arr[1]);
unset($arr[2]);
// massivdan hamma elementini o‘chiramiz
print_r($arr); // massivni ekranga chiqaramiz (kaliti va qiymatini)
$arr[] = "aa"; // massivga yangi element qo‘shamiz. Uni indeksi(kaliti) 3 bo‘ladi, 0 emas.
print_r($arr);
$arr =
array_values($arr); // massivni qayta indekslaymiz.
$arr[] = "bb"; // bu elementni kaliti 1 bo‘ladi.
print_r($arr);
?>
