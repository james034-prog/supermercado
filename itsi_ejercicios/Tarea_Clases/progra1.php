<?php
$num1=45;
$num2=34;
if($num1<10 || $num1 >=100 || $num2<10 || $num2>=100){
    echo "ERROR EN DATOS, HAY NUMEROS QUE SON DE 2 DIGITOS";
}else{
$a=floor($num1/10);
$b=$num1 %10;
$suma1=$a+$b;

$c=floor($num2/10);
$d=$num2 %10;
$suma2=$c+$d;

echo "suma 1 =".$suma1."<br>";
echo "suma 2 =".$suma2."<br>";

if($suma1>$suma2){
    echo "Mayor es ".$suma1;
}else{
    echo "Mayor es ".$suma2;
}
}
?>
