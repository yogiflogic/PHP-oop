<?php
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

?>