
<?php
include '../data/static/colaboradores_static.php';


global $Tot_vendas;
$Tot_vendas = soma($colaboradores_static);
global $percentual;
$percentual = 0.05;
global $comissao;
global $tot;

//Realiza o cálculo da comissão com 5%
function comissao(array $array)
{
    global $comissao;
    global $Tot_vendas;
    global $percentual;
    global $tot;
    foreach ($array as $indice => $colaborador) {

        $comissao[$indice] = $Tot_vendas[$indice] * $percentual * 1000;
        $tot[$indice] = number_format($comissao[$indice], 0, '', '.');
        //echo "<br/>";
    }

    return $tot;
}
//comissao($colaboradores_static);
//echo $tot[2];
?>