<?php

include '../data/static/colaboradores_static.php';
global $soma;

//Faz a soma das vendas da semana1 até a semana4
function soma(array $array)
{
    global $soma;
   
    foreach ($array as $indice => $colaborador) {
        $total = number_format(array_sum($colaborador['Vendas']), 2, '.', '');
        echo "<br/>";
        $soma[$indice] = $total;
        
    }
    return $soma;
}


/*
//Coloca o valor da soma no array [FALTA APRIMORAR!]

function putOnTheTable(array $array){

    global $soma;
    foreach ($array as $indice => $colaborador) {
        if($colaborador['Resultado']['Total Vendas'] === 0){
            $colaborador['Resultado']['Total Vendas'] = $soma[$indice]; 
        }
    }

}
*/

?>