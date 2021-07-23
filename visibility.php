<?php
/*
    Visibility (Acces Modifier) -> Keyword  - PUBLIC
                                            - PROTECTED
                                            - PRIVATE
    Visibility ->   Sebuah konsep yang mengatur HAK AKSES pada sebuah PROPERTY (Variable) & METHOD (Function)
                    pada sebuah OBEJECT (class), dalam penggunaannya bagus untuk menghindari "BUG"
    - PUBLIC -> Dapat digunkan dimana saja bahkan di luar class 
    - PROTECTED -> Hanya dapat di gunakan di dalam clas beserta turunannya (inheritance == PEWARISAN (keyword extends))
    - PRIVATE -> Hanya dapat digunakn didalam kelas itu saja atau kelas yang sama 
*/

//class di sebutjuga object
class Chelsea {
    // pada oop variabel di sebut properties
    public    $player,
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

    public function getValue()
    {
        return $this->value - ($this->value * $this->diskon/100);
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
    protected $jmlchamp;
    // Overriding adalah menggunakan nama method yang sama dengan class induk dengan menggunakan kewyword "PARENT"
    public function __construct($player="Terry", $nopunggung=26, $stamina=95,$jmlchamp=0)
    {
        parent::__construct($player, $nopunggung, $stamina);
        $this->jmlchamp=$jmlchamp;
    }

    public function getLabel()
    {
        $str = parent::getLabel()." - Jumlah Trofi Champ : {$this->jmlchamp}";
        return $str;
    }

    public function setDiskon($diskon)
    {
        $this->diskon=$diskon;
    }
}


class trofiPremier extends Chelsea{
    private $jmlpl;
    
        public function __construct($player="Terry", $nopunggung=26, $stamina=95, $jmlpl = 0)
    {
        parent::__construct($player, $nopunggung, $stamina);
        $this->jmlpl=$jmlpl;
    }

      public function getLabel()
    {
        $str = parent::getLabel()."- Jumlah Trofi PL : {$this->jmlpl}";
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


echo $infochamp->getLabel();
echo "<br>";
echo $infoprem->getLabel();
echo "<br>";
$infochamp->setDiskon(15);
echo "Market Value : ".$infochamp->getValue();

?>