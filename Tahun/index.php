<?php
for($i = 1600; $i <= 2024; $i += 4){
    if($i % 400 == 0){
        echo $i. " tahun kabisat <br>";
    }elseif($i % 100 == 0){
        echo $i. " bukan tahun kabisat <br>";
    }elseif($i % 4 == 0){
        echo $i. " tahun kabisat <br>";
    }else{
        echo $i. " bukan tahun kabisat <br>";
    }
}