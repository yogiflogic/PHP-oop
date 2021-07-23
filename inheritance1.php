<?php
//class di sebutjuga object

class Chelsea{
    // pada oop variabel di sebut properties
    public  $player,
            $nopunggung,
            $stamina,
            $jmlchamp,
            $pl;

    /* __construct merupakan sebuah Method khusus pada class yang OTOMATIS di jalankan ketika sebuah class
     di instance dengan keyword NEW untuk membuat sebuah object dari sebuah class atau 
     akan di jalankan ketika membuat object baru dari sebuah class */

    public function __construct($player="Terry", $nopunggung=26, $stamina=95, $jmlchamp=1, $pl=1)
    {
        $this-> player = $player;
        $this-> nopunggung = $nopunggung;
        $this-> stamina = $stamina;
        $this->jmlchamp = $jmlchamp;
        $this->pl = $pl;
    }


    //Jika di oop di sebut method
    public function getLabel()
    {
        return " Name : $this->player, No Punggung : $this->nopunggung, Stamina : $this->stamina";
    }
}

// OBJECT TYPE / data type fungsi class pada contoh ini hanya berfungsi untuk mencetak saja
/*class infoPlayer{
        //data type
    public function cetak(Chelsea $chelsea){
        $str = "{$chelsea->getLabel()}" ;
        return $str;
    }
}*/

// inheritance == PEWARISAN (keyword extends)
class trofiChamp extends Chelsea{
    public function tfChamp(){
        $str = "{$this->getLabel()} - Jumlah Trofi Champ : {$this->jmlchamp}";
        return $str;
    }
}

class trofiPremier extends Chelsea{
    public function tfPremier(){
        $str = "{$this->getLabel()} - Jumlah Trofi PL :{$this->pl}";
        return $str;
    }
}

//membuat instance atau object baru dari sebuah class dengan keyword "NEW"
//$chelsea1 = new Chelsea("H.Ziyech",11,99,2);
//$chelsea2 = new Chelsea("Mason",10,100);

//$chelsea1->getLabel();
//$chelsea2->getLabel();

$infochamp = new trofiChamp("H.Ziyech",11,99,2,'');
$infoprem = new trofiPremier("Mason",10,100,'',6);

echo $infochamp->tfchamp();
echo "<br>";
echo $infoprem->tfPremier();

?>