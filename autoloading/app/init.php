<?php
//Cara 1
/*
    require_once "chelsea/Label.php";
    require_once "chelsea/Chelsea.php";
    require_once "chelsea/TrofiChamp.php";
    require_once "chelsea/TrofiPremier.php";
    require_once "chelsea/InfoPlayer.php";
    require_once "service/User.php";
*/

//Cara 2
/*
function __autoload($class) {
    require_once 'chelsea/' . $class . '.php';
 }

*/

/*
//Cara 3
function autoload($class){
    require_once "chelsea/".$class .".php";

}

spl_autoload_register('autoload');
*/

//Cara 4
/*
    //fungsi ini akan memanggil semua class secara otomatis (fungsi closure TANPA NAMA)
    spl_autoload_register(function($class){
        
        require_once __DIR__."/chelsea/".$class .".php";
    });
*/

//Cara 5 Dengan Memanggil NAMESPACE
    spl_autoload_register(function($class){
        $class = explode('\\',$class);
        $class = end($class);
        require_once __DIR__."/chelsea/".$class .".php";
    });

    spl_autoload_register(function($class){
        $class = explode('\\',$class);
        $class = end($class);
        require_once __DIR__."/service/".$class .".php";
    });

?>
