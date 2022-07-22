<?php

class TrofiPremier extends Chelsea implements Label{
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


?>