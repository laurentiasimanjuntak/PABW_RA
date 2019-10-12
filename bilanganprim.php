<?php 
 
for($a=1;$a<=37;$a++){ // perulangan 1 sampai 37
    $k=0;
    for($b=1;$b<=$a;$b++){ // perulangan bilangan pembagi
        if($a % $b == 0){ // modulus
            $k++;
        }
    }
        if($k == 2){ // salah satu syarat 2 bukan merupakan bilangan prima
        echo $a.',';
        }
}