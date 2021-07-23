<?php
//class di sebutjuga object
class Chelsea{
    // pada oop variabel di sebut properties
    public  $player ="hazard",
            $nopunggung=17,
            $stamina=80;

    /* __construct merupakan sebuah Method khusus pada class yang OTOMATIS di jalankan ketika sebuah class
     di instance dengan keyword NEW untuk membuat sebuah object dari sebuah class atau 
     akan di jalankan ketika membuat object baru dari sebuah class ,
     __construct berfungsi juga untuk mengisi value pada variable secara dinamis
    */

    public function __construct($player, $nopunggung, $stamina)
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

//membuat instance atau object baru dari sebuah class dengan keyword "NEW"
$chelsea1 = new Chelsea("",'','','');
$chelsea2 = new Chelsea("Mason",10,100);
echo $chelsea1->getLabel();
echo "<br>";
echo $chelsea2->getLabel();

?>