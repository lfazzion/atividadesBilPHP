<?php
$soma = 0;
$contador = 0;

echo "escreva um numero para tirarmos a sua media: ";
$numusuario = intval(readline());

while ($numusuario > 0) {
    $soma += $numusuario;
    $contador++;
    echo "escreva mais numeros para continuarmos somando, senão apenas coloque zero ou menor: ";
    $numusuario = intval(readline());

    if ($numusuario <= 0) {
        $tirarmedia = $soma / $contador;
        echo "a media é: $tirarmedia ";
    }
}
