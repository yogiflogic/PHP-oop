<?php
// inheritance == PEWARISAN (keyword extends)
class TrofiChamp extends Chelsea implements Label{
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
?>