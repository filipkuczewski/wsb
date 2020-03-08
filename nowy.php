<?php
$potega=2**10;
echo $potega,"<br>";
//systemy liczbowe
$int=10;
$hex=0xA; //0xliczba
$oct=012; //1*8^1+2*8^0=10
$bin=0b1011;

echo $int;
echo $hex;
echo $oct;
echo $bin,"<hr>";

//echo phpinfo();

//Operatory bitowe
    $x = 0b1010;
    echo $x;
    $x=$x>>1;
    echo $x;
    $x=$x<<2;
    echo $x;

//Rowne lub identyczne


$x = 2;
$y = 2.0;

if ($x==$y){
echo "Rowne";
}else{
    echo "Różne";
}

if ($x===$y){
    echo "Identyczne";
    }else{
        echo "NieIdentyczne";
    }


    //Operatory rzutowania daych
    $text="123ssd";
   // $x = int $text;
    echo $x;
    echo gettype($text);    //string
    echo gettype($x);   //integer
   
    $text="123ssd";
   // $x = int $text;

    echo "<hr><br>";
    echo $x;
    echo gettype($text);    //string
    echo gettype($x);   //integer

    echo PHP_INT_SIZE, "<br>"; //8
    echo PHP_INT_MIN, "<br>"; //8
    echo PHP_INT_MAX, "<br>"; //dua


    $x='10';
    echo is_int($x);
    echo is_string($x);
    echo is_float($x);
    echo is_null($x);

    echo "cos nowego";

    echo "<hr><br>";


    echo $_SERVER['SERVER_PORT'], "<br>"; //80
    echo $_SERVER['SERVER_NAME'], "<br>"; //80
    echo $_SERVER['SCRIPT_NAME'], "<br>"; //80
    echo $_SERVER['DOCUMENT_ROOT'], "<br>"; //80

    $fileLocal = $_SERVER['DOCUMENT_ROOT'];
    $fileLocal .= $_SERVER['SCRIPT_NAME'];

    echo $fileLocal, "<hr>";

    //Stałe - nazwy stalych z duzych liter

    define ("NAME", "Janusz");
    echo NAME;
    
    define ("surnamE", "Nowak", true);
    echo surname,"<br>";

    //Stałe predefiniowane

    echo "<hr><br>";
    echo PHP_VERSION, "<br>";

    echo PHP_OS;
    echo __LINE__;
    echo "<hr><br>";


 ?>