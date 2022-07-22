<?php

require_once "app/init.php";
//membuat instance atau object baru dari sebuah class dengan keyword "NEW"
//$chelsea1 = new Chelsea("H.Ziyech",11,99,2);
//$chelsea2 = new Chelsea("Mason",10,100);

//$chelsea1->getLabel();
//$chelsea2->getLabel();

$infochamp = new TrofiChamp("H.Ziyech",11,99,2);
$infoprem = new TrofiPremier("Mason",10,100,6,);

$infoPlay = new InfoPlayer();
$infoPlay->tambahScuat($infochamp);
$infoPlay->tambahScuat($infoprem);

echo $infoPlay->cetak();
echo '<br>';
//Memanggil NAMESPACE dengan menggunakan ALIAS (as)

use app\chelsea\User as ChelseaUser;
use app\service\User as ServiceUser;

new Chelseauser();
echo '<br>';
new ServiceUser();

?>