<?php
echo "escreva seu peso em kg: ";
$peusuario = readline();

echo "escreva a sua altura em metros: ";
$alusuario = readline();

$valor = $peusuario / ($alusuario * $alusuario);

echo "Seu IMC é $valor";