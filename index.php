<?php
//Mostrar erros
error_reporting(E_ERROR | E_PARSE);
//Cabeçalho
include 'src/layout/header.php';
?>

<?php

//Inclui o array
include 'src/data/colaboradores.php';

//Criando a tabela
$table = '<table border=1>';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<th class="destaque"> Colaborador</th>';
$table .= '<th class="destaque"> Salário Fixo</th>';
$table .= '<th class="destaque"> Venda Semana 1</th>';
$table .= '<th class="destaque"> Venda Semana 2</th>';
$table .= '<th class="destaque"> Venda Semana 3</th>';
$table .= '<th class="destaque"> Venda Semana 4</th>';
$table .= '<th class="destaque"> Total Vendas</th>';
$table .= '<th class="destaque"> Comissão</th>';
$table .= '<th class="destaque"> Salário Final</th>';
$table .= '</tr>';
$table .= '</thead>';

$table .= '<tbody>';
$table .= '<tr>';

//Percorre o array
foreach ($colaboradores as $indice => $colaborador) {
    $table .= '<td>' . $colaborador['Colaborador'] . '</td>';
    $table .= '<td>' . 'R$ ' . $colaborador['Sal']['Salário Fixo'] . '</td> ';
    $table .= '<td>' . 'R$ ' . $colaborador['Vendas']['Venda Semana 1'] . '</td> ';
    $table .= '<td>' . 'R$ ' . $colaborador['Vendas']['Venda Semana 2'] . '</td> ';
    $table .= '<td>' . 'R$ ' . $colaborador['Vendas']['Venda Semana 3'] . '</td> ';
    $table .= '<td>' . 'R$ ' . $colaborador['Vendas']['Venda Semana 4'] . '</td> ';
    $table .= '<td class="destaque">' . 'R$ '  . $colaborador['Resultado']['Total Vendas'] . '</td> ';
    $table .= '<td class="destaque">' . 'R$ ' . $colaborador['Resultado']['Comissão'] . '</td> ';
    $table .= '<td class="destaque">' . 'R$ ' . $colaborador['Resultado']['Salário Final'] . '</td> ';
    $table .= '</tr>';
}

//Fechando a tabela
$table .= '</tbody>';
$table .= '</table>';

//Imprime a tabela
echo $table;

?>
<?php
//Rodapé
include 'src/layout/footer.php';
?>
