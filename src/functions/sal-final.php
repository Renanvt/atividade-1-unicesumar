<?php
include '../data/static/colaboradores_static.php';
include '../functions/comissao.php';

// Variáveis globais
$total;
$cms;
$salFixo;
$salFinal;
$sum_formated;
$sum;

//Carrega a comissão
$cms = comissao($colaboradores_static);


//Obtêm o salário fixo
function SalFixo(array $array)
{
    foreach ($array as $indice => $colaborador) {
        global $salFixo;
        $salFixo[$indice] = $colaborador['Sal']['Salário Fixo'];
    }
    return $salFixo;
}


//Realiza o cálculo do salário Final -> Salário Fixo + Comissão
function salFinal(array $array)
{
    global $cms;
    global $salFixo;
    global $sum_formated;
    global $sum;


    foreach ($array as $indice => $colaborador) {

        $sum[$indice] = bcadd($salFixo[$indice], $cms[$indice]);
        $sum_formated[$indice] = number_format(floatval($sum[$indice]), 3, '.', '');
    }

    return  $sum_formated;
}
//$total = salFinal($colaboradores_static);
//var_dump($total);


