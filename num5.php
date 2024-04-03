<?php
$condicao = true;
$numeroaleatorio = rand(0, 100);
echo "eu te desafio a adivinhar um numero entre 0 e 100: ";

while ($condicao) {
    $numusuario = readline();

    if ($numusuario == $numeroaleatorio) {
        echo "Acertoouuu seu lindo!!! ";
        $condicao = false;
    }
    if ($numusuario < $numeroaleatorio) {
        echo "erroooou, é um numero maior que esse, tente novamente: ";
    }
    if ($numusuario > $numeroaleatorio) {
        echo "erroooou, é um numero menor que esse, tente novamente: ";
    }
}