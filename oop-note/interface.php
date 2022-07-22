<?php

/*
    interface -> - class abstract yang sama sekali tidak boleh memilki implementasi
                 - Merupakan sebuah template untuk turunanannya
                 - TIDAK boleh memiliki property dan hanya boleh memiliki deklarasi METHOD saja
                 - Semua METHOD HARUS dengan visibility PUBLIC
                 - Boleh Mendeklarasikan method __construct()
                 - Satu class boleh mengIMPLEMENTASIKAN banyak interface (class Chelsea implements trofi,players)
*/
interface Label{
    
    public function getLabel();

}
//class di sebutjuga object
 abstract class Chelsea {
    // pada oop variabel di sebut properties
    protected $player,
              $nopunggung,
              $stamina;
    private $value = 200;
    protected $diskon = 0;   

    /* __construct merupakan sebuah Method khusus pada class yang OTOMATIS di jalankan ketika sebuah class
     di instance dengan keyword NEW untuk membuat sebuah object dari sebuah class atau 
     akan di jalankan ketika membuat object baru dari sebuah class */

    public function __construct($player="Terry", $nopunggung=26, $stamina=95)
    {
        $this-> player = $player;
        $this-> nopunggung = $nopunggung;
        $this-> stamina = $stamina;
        
    }
    //Jika di oop di sebut method
    public function getValue()
    {
        return $this->value - ($this->value * $this->diskon/100);
    }
    
    //METHOD ABSTRACT
    abstract public function getInfo();
}


// inheritance == PEWARISAN (keyword extends)
class trofiChamp extends Chelsea implements Label{
    protected $jmlchamp;
    // Overriding adalah menggunakan nama method yang sama dengan class induk dengan menggunakan kewyword "PARENT"
    public function __construct($player="Terry", $nopunggung=26, $stamina=95,$jmlchamp=0)
    {
        parent::__construct($player, $nopunggung, $stamina);
        $this->jmlchamp=$jmlchamp;
    }

    public function getInfo()
    {
        return " Name : $this->player, No Punggung : $this->nopunggung, Stamina : $this->stamina";
    }

    public function getLabel()
    {
        $str = $this->getInfo()." - Jumlah Trofi Champ : {$this->jmlchamp}";
        return $str;
    }

    public function setDiskon($diskon)
    {
        $this->diskon=$diskon;
    }
}


class trofiPremier extends Chelsea implements Label{
    private $jmlpl;
    
        public function __construct($player="Terry", $nopunggung=26, $stamina=95, $jmlpl = 0)
    {
        parent::__construct($player, $nopunggung, $stamina);
        $this->jmlpl=$jmlpl;
    }

    public function getInfo()
    {
        return " Name : $this->player, No Punggung : $this->nopunggung, Stamina : $this->stamina";
    }

      public function getLabel()
    {
        $str = $this->getInfo()."- Jumlah Trofi PL : {$this->jmlpl}";
        return $str;
    }
}

// OBJECT TYPE / data type fungsi class pada contoh ini hanya berfungsi untuk mencetak saja
class infoPlayer{
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
//membuat instance atau object baru dari sebuah class dengan keyword "NEW"
//$chelsea1 = new Chelsea("H.Ziyech",11,99,2);
//$chelsea2 = new Chelsea("Mason",10,100);

//$chelsea1->getLabel();
//$chelsea2->getLabel();

$infochamp = new trofiChamp("H.Ziyech",11,99,2);
$infoprem = new trofiPremier("Mason",10,100,6,);

$infoPlay = new infoPlayer();
$infoPlay->tambahScuat($infochamp);
$infoPlay->tambahScuat($infoprem);

echo $infoPlay->cetak();


?>