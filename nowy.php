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
    $x = int $text;
    echo $x;
    echo gettype($text);    //string
    echo gettype($x);   //integer

 ?>