<html>
<head>
    <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=utf-8"/>
</head>

<?php
function f_d($var)
{
    if ($var == 0) return "&nbsp;"; else
        return sprintf("%22.2f", $var);
}

function datetostring($date)
{
    $d = explode("-", $date);
    return $d['0'] . '.' . $d['1'] . '.' . $d['2'];
}

echo "<table>";
echo "<thead>";
echo "<tr>
		<td>Название организации</td>
		<td># Дог</td>
		<td>П/п</td>
		<td>Период</td>
		<td>РНН</td>
		<td>БИН</td>
		<td>Номер сч/ф</td>
		<td>Дата</td>
		<td></td>
		<td></td>
		<td>Сумма без ндс</td>
		<td>НДС</td>
		<td>НДС</td></tr>";
$j = 1;
echo "</thead>";
echo "<tbody>";
foreach ($nalog->result() as $n) {
    echo "<tr>
		<td>{$n->firm_name}</td>
		<td>{$n->dogovor}</td>
		<td>" . ($j++) . "</td>
		<td>{$n->period_id}</td>
		<td>'{$n->rnn}</td>
		<td>'{$n->bin}</td>
		<td>{$n->id}</td>
		<td>{$n->schetfactura_date}</td>
		<td></td>
		<td></td>
		<td>{$n->itog_tenge}</td>
		<td>{$n->itogo_nds}</td>
		<td>{$n->itogo_nds}</td></tr>";
}
echo "</tbody>";
?>
</table>
</html>