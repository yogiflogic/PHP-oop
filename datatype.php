<?php
//class di sebutjuga object
class Chelsea{
    // pada oop variabel di sebut properties
    public  $player,
            $nopunggung,
            $stamina;

    /* __construct merupakan sebuah Method khusus pada class yang OTOMATIS di jalankan ketika sebuah class
     di instance dengan keyword NEW untuk membuat sebuah object dari sebuah class atau 
     akan di jalankan ketika membuat object baru dari sebuah class */

    public function __construct($player="Terry", $nopunggung=26, $stamina=95)
    {
        $this-> player = $player;
        $this-> nopunggung = $nopunggung;
        $this->stamina = $stamina;
    }


    //Jika di oop di sebut method
    public function getLabel()
    {
        return " $this->player, $this->nopunggung, $this->stamina ";
    }
}

// OBJECT TYPE / data type fungsi class pada contoh ini hanya berfungsi untuk mencetak saja
class infoPlayer{
        //data type
    public function cetak(Chelsea $chelsea){
        $str = "{$chelsea->getLabel()}" ;
        return $str;
    }
}

//membuat instance atau object baru dari sebuah class dengan keyword "NEW"
$chelsea1 = new Chelsea("H.Ziyech",11,99);
$chelsea2 = new Chelsea("Mason",10,100);

//$chelsea1->getLabel();
//$chelsea2->getLabel();

$infoPlayer1 = new infoPlayer();
echo $infoPlayer1->cetak($chelsea1);
echo "<br>";
echo $infoPlayer1->cetak($chelsea2);

?>