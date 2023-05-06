<?php
$valor1 = 5;
$valor2 = 10;
$resultado = ($valor1 + $valor2)*($valor2/2);
echo $resultado;

#Portugol
#variavel1 = 5
#variavel2 = 10
#resultado = (variavel1+variavel2)*(variavel2/2)
#escreva resultado

?>

<?php
$valor1 = 100; 
$porcetagem = ($valor1*0.15);
echo $porcentagem;

#Portugol 
#variavel = 100
#porcentagem = variavel*0.15 
#escreva porcentagem
?>

<?php
#O cliente de uma loja realizou uma compra de um produto e decidiu fazer o pagamento em 12 parcelas iguais. Para este parcelamento é cobrado juros de 1% ao mês. 
#Escreva um código que calcule e exiba o valor total de compra e o valor das parcelas.
$valor = 1200;
$juros = $valor*0.12;
$total = $valor+$juros;
$parcela = $total/12;
echo $total."<br>";
echo $parcela;

#Portugol
#variavel = 1200
?>

<?php
#Escreva um código que receba um valor inteiro
#Converta-os em anos, exiba a idade e informe se ele é maior ou menor de idade
$valor = 10000;
$idade = ($valor/365);
    echo number_format ($idade);
if ($idade >= 18) {
    echo "Maior de Idade";
}
else {
    echo "Menor de Idade";
}
?>

<?php
#Escreva um código que receba 1 valor inteiro,
#O primeiro valor vai determinar a quantidade de linhas e colunas
#Repita a palavra FPB nas linhas e colunas.

$valor = 3;
for($i=0; $i<$valor; $i++) {
    for($j=0; $j<=$i; $j++){
        echo "FPB";
    }
    echo"<br>";
}

#Portugol
#valor = 3
#para(i=0; i<valor; i++){
# para (j=0; j<=i; j++){
# escreva "FPB"
#}
#escreva "/n"
#}
?>

<?php
#Escreva um código que receba 4 valores inteiros (A, B, C e D)
#Se B for maior que C e D for maior que A e a soma de C com D for maior que a soma de A com B
#E se C e D, ambos, forem positivos e se A for positivo
#Escrever a mensagem "Valores Aceitos", se não escrever "Valores Não Aceitos"

$A = 1
$B = 2
$C = 3
$D = 4

if 
?>
