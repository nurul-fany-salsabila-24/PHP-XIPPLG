<?php
//struktur kendali

$nilai=50;

if($nilai >=75 && $nilai <= 79){
    echo "CUKUP";
} else if($nilai >= 80 && $nilai <= 85){
    echo "BAIK";
}else if ($nilai >= 86 && $nilai >= 100 ){
    echo "SANGAT BAIK";
}else{
    echo "TIDAK LULUS";
}
?>