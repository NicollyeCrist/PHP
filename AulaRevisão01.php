##
<?php

$valor = 20;

if ($valor %2==0) {
   for($i=0; $i<$valor; $i++) {
      echo $i."<br>";
}
} 
else {
 echo "O valor é ímpar.";
}

?>


##Receber três variáveis a,b e c e Fórmula de Bhaskara
<?php
$a = 2;
$b = 5;
$c = 2;
$delta = ($b*$b) - 4*$a*$c;

if ($delta >=0); {
x1= ($b*(-1) + sqrt($delta)) / 2*$a;
x2= ($b*(-1) - sqrt($delta)) / 2*$a;
echo x1."".x2;
}
else {
    echo "Delta negativo"; 
}


?>

##Código que receba a altura e peso do user, calcule seu imc e informe seu nível.
<?php
$altura = 1.54;
$peso = 51;
$imc = $peso / $altura**2;
if ($imc<18.5) {
    echo"Abaixo do Peso";}
elseif ($imc >=18.5 && $imc <25) {
    echo"Peso Ideal"; }
elseif ($imc >= 25 && $imc <=30) {
    echo"Acima do Peso"; }
else {
    echo"Obesidade";
}

?>
