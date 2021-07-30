<?php
include 'src/layout/header.php';
?>

<?php
$colaboradores = include 'src/data/colaboradores.php';


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
foreach($colaboradores as $indice => $colaborador){
$table .= '<td>'.$colaborador['Colaborador']. '</td>';
$table .= '<td>' .$colaborador['Salário Fixo']. '</td> ';
$table .= '<td>' .$colaborador['Venda Semana 1']. '</td> ';
$table .= '<td>' .$colaborador['Venda Semana 2']. '</td> ';
$table .= '<td>' .$colaborador['Venda Semana 3']. '</td> ';
$table .= '<td>' .$colaborador['Venda Semana 4']. '</td> ';
$table .= '<td class="destaque">' .$colaborador['Resultado']['Total Vendas']. '</td> ';
$table .= '<td class="destaque">' .$colaborador['Resultado']['Comissão']. '</td> ';
$table .= '<td class="destaque">' .$colaborador['Resultado']['Salário Final']. '</td> ';
$table .= '</tr>';

}


$table .= '</tbody>';
$table .= '</table>';

echo $table;



?>
<?php
include 'src/layout/footer.php';
?>