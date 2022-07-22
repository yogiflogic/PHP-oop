<?php
// OBJECT TYPE / data type fungsi class pada contoh ini hanya berfungsi untuk mencetak saja
class InfoPlayer{
    //data type
public $daftarScuat = [];

public function tambahScuat(Chelsea $c)
{
    $this->daftarScuat [] = $c;
    
}

public function cetak(){
    $str = "DAFTAR SCUAT <br>" ;

    foreach($this->daftarScuat as $ts)
    {
        $str .=" {$ts->getLabel()} <br>";
    }

    return $str;
}

}
?>