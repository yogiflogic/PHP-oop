<?php
/*
        Untuk apa dan kapan menggunakan static keyword?
    - Member (property dan method ) yang terikat dengan class bukan dengan object
    - Nilai static akan selalu tetap meskipun object di instansiasi berulang kali
    - Membuat code seolah-olah menjadi procedural
    - Biasanya digunakan untuk membuat fungsi bantuan/helper function
    - Digunakan pada class-class utility pada framwork
    - Pemanggilan Class dan Method dengan menggubakan OPERATOR <::> (Chelsea1::nickname())


*/
class Chelsea1{
    public static $nilai = 1 ;

    public static function nickname()
    {                          
        /*  - pada static keyword (SELF) adalah pengganti $this , karena $this hanya berfungsi ketika sebuah
              class di INSTANSIASI (new) atau di jadikan sebuah object
            - Sedangkan keyword (SELF) juga hanya berlaku ketika sebuah class yang di isi dengan property/method static
        */  

        return  "CHELSEA 1 : ". SELF::$nilai++;
    } 
}

class Chelsea2{
    public $nilai = 1 ;
    
    public function nickname()
    {                          
        /*  - pada static keyword (SELF) adalah pengganti $this , karena $this hanya berfungsi ketika sebuah
              class di INSTANSIASI (new) atau di jadikan sebuah object
            - Sedangkan keyword (SELF) juga hanya berlaku ketika sebuah class yang di isi dengan property/method static
        */  

        return  "CHELSEA 2 : ". $this->nilai++;
    }

    public function modulus()
    {

        $k = 0;
        for ($i=0; $i<7; $i++)
        {
            if ($i % 3 == 0)
            {
                $k += 3;
            }
        }
        echo "Modulus : ". $i."  ".$k;
    }

    public function hitung($x, $y)
    {
        $z = 2;
        for ($i=9; $i<=$x; $i++)
        {
            if($i <= 20)
            {
                $z += ($x*2)/$y;
            }
        }
        echo $z,$x;
    }
}

//dengan instansiasi
echo "<hr>";
echo "DENGAN PROPERTY DI BERI KEYWORD STATIC DAN HASIL AKAN SAMA JIKA FUNGSI JUGA DI BERI KEYWORD STATIC";
echo "<hr>";
$obj1 =  new Chelsea1;
echo $obj1->nickname();
echo "<br>";
echo $obj1->nickname();
echo "<br>";
echo $obj1->nickname();
echo "<br>";
echo "<hr>";
$obj2 =  new Chelsea1;
echo $obj2->nickname();
echo "<br>";
echo $obj2->nickname();
echo "<br>";
echo $obj2->nickname();

echo "<hr>";
echo " TANPA PROPERTY YANG DI BERI KEYWORD STATIC DAN FUNGSI TANPA KEYWORD STATIC ";
echo "<hr>";
$obj1 =  new Chelsea2;
echo $obj1->nickname();
echo "<br>";
echo $obj1->nickname();
echo "<br>";
echo $obj1->nickname();
echo "<br>";
echo "<hr>";
$obj2 =  new Chelsea2;
echo $obj2->nickname();
echo "<br>";
echo $obj2->nickname();
echo "<br>";
echo $obj2->nickname();

echo "<hr>";
echo "METODE PEMANGGILAN DENGAN STATIC (::) &";
echo "<br>";
echo "DENGAN PROPERTY DI BERI KEYWORD STATIC DAN HASIL AKAN SAMA JIKA FUNGSI JUGA DI BERI KEYWORD STATIC";
echo "<hr>";
echo Chelsea1::nickname();
echo "<br>";
echo Chelsea1::nickname();
echo "<br>";
echo Chelsea1::nickname();
echo "<br>";

echo "<hr>";
echo "Intermezo";
echo "<br>";
$obj2->modulus();
echo "<br>";
$obj2->hitung(10,20);
?>