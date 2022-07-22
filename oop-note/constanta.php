<?php

/* 
    CONSTANT -> Sebuah identifier untuk menyimpan sebuah nilai dan
                nilai yang di simpan TIDAK dapat berubah ketika sudah di SET

    2 keyword konstanta :
    - define -> hanya bisa di gunakan di di luar CLASS (disarankan mengetik constant name semuanya dengan huruf kapital)
    - const -> bisa digunakan di dalam CLASS

    Banyak pilihan MAGIC CONSTANT di PHP yang di awali harus menggunakan 2 underscore (__) contoh __LINE__ 
*/

define('NAMA','yogi');
const JOB = 'DEVELOPER';

echo NAMA;
echo '<br>';
echo JOB;
echo '<br>';

class contohConst{
    const JOB = 'FULL STACK DEVELOPER';

}

echo contohConst::JOB;

?>