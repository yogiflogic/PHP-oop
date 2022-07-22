<?php
/*
    abstract ->   Merupakan sebuah kelas yang tidak dapat di instansiasi
                - Mendefinisikan interface untuk class turunannya
                - Berperan sebagai kerangka dasar untuk turunanya
                - HARUS memiliki setidaknya 1 Method (function) abstract, erat kaitanya dengan inheritance (pewarisan)
                - Digunakan di dalam pewarisan(inheritance) untuk menggunakan/implementasikan method abstract dengan 
                  nama method yang sama pada class turunannya
                - Isi method abstract pada class abstract PARENT HARUS tidak ada isinya, karna isinya nanti akan di ketik
                  pada class-class turunannya
                - Semua class turunan harus MENGIMPLEMENTASIKAN semua METHOD ABSTRACT yang ada pada class abstrack PARENTnya
                - class abstract boleh memimiliki property/method reguler (minimal harus ada 1 method abstract)
                - class abstract boleh memimiliki property/static method (minimal harus ada 1 method abstract)

*/


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
abstract class Chelsea {
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
    //Jika di oop di sebut method
    public function getValue()
    {
        return $this->value - ($this->value * $this->diskon/100);
    }

    //METHOD ABSTRACT
    abstract public function getLabel();

    public function getInfo()
    {
        return " Name : $this->player, No Punggung : $this->nopunggung, Stamina : $this->stamina";
    }
}


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
        $str = $this->getInfo()." - Jumlah Trofi Champ : {$this->jmlchamp}";
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