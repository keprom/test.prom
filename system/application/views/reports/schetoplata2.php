<?php 
function datetostring2($date)
{
	$d=explode("-",$date); 
	return $d['2'].'.'.$d['1'].'.'.$d['0'];
}
function f_d3($var)
{
	if ($var==0) return "&nbsp;"; else
	return sprintf("%22.2f",round($var*100)/100);
}
function f_d4($var)
{
	if ($var==0) return "&nbsp;"; else
	return sprintf("%22.2f",round($var*100)/100);
}
function f_d_nums($var, $nums)
{
	if ($var==0) return "&nbsp;"; else
	return sprintf("%22.".$nums."f",round($var*100)/100);
}
?>
<html>
<head>
<title>Счет на оплату</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
 <table width=100% >
 <tr>
 <td align=left> <center><b>СЧЕТ<?php echo $schet;?> №</b>
<?php echo $number.' от ';
if (strlen($data_schet)==0){ echo datetostring2($schetfactura_date->date);} else { echo $data_schet;}?>
 </center> </td>
 <td> (1)</td>
 </tr>
 
 <tr>
 <td width=2100px> <b>Поставщик</b> <u><?php echo $org->org_name; ?></u>
 
 </td>
 <td> (2)</td>
 </tr>
 <tr >
 <td width=2100px> БИН и адрес местнахождения поставщика <?php echo " <u>".$org->bin." ".$org->address;?></u>
 </td>
 <td> (2а)</td>
 </tr>
 <tr>
 <td width=2100px> Расчетный счет поставщика <u><?php echo $org->IIK;?> КБЕ-<?php echo $org->Bank_kbe;?> КНП-<?php echo $org->bank_knp;?> <?php echo $org->bank_name; ?>              
 БИК <?php echo $org->bank_bik;?></u></td>
 <td> (2б)</td>
 </tr>
 <tr>
 <td width=2100px> Свидетельство о постановке на регистрационный учет по НДС <?php echo $org->svidetelstvo_nds;?> </td>
 <td></td>
 </tr>
 <tr>
 <td width=2100px> Договор(контракт) на поставку товаров (работ, услуг) №<u><?php echo $firm->dogovor."        </u> от <u>       ".datetostring2($firm->dogovor_date);?>                 </u></td>
 <td> (3)</td>
 </tr>
 <tr>
 <td width=2100px> Условия оплаты по договору (контракту)<u><?php echo $firm->edit1; ?>                                                                                                                             </u></td>
 <td> (3а)</td>
 </tr>
 <tr>
 <td width=2100px> Пункт назначения поставляемых товаров (работ, услуг)<u><?php echo $firm->edit2; ?>                                                                                                                                           </u></td>
 <td> (4)</td>
 </tr>
 <tr align=right>
 <td width=2100px><i><FONT size=1>(государство, регион, область, город, район)                                                                         </font> </i>                          </td>
 <td> </td>
 </tr>
  <tr>
 <td width=2100px> Поставка товаров осуществлена по доверенности №<u><?php echo $firm->edit3; ?>                                                       </u></td>
 <td> (5)</td>
 </tr>
 <tr>
 <td width=2100px> Способ отправления <u><?php echo $firm->edit4; ?>                                                                                                                                                    </u></td>
 <td> (6)</td>
 </tr>
 <tr>
 <td width=2100px> Товарно-транспортная накладная №_______________________     от ________________________________________ </td>
 <td> (7)</td>
 </tr>
 <tr>
 <td width=2100px> Грузоотправитель <u>филиал ТОО "Кокшетау Энерго Центр" Горэлектросети  БИК NURSKZKX КБЕ 17 БИН 091241017203 АО "Нурбанк"                                                                                                                     </u></td>
 <td> (8)</td>
 </tr>
 <tr align=right>
 <td width=2100px><i><FONT size=1>(РНН, наименование и адрес места нахождения)                                                                                                                        </font></i></td>
 <td> </td>
 </tr>
 <tr>
 <td width=2100px> Грузополучатель  <u><?php echo $firm->edit6; ?>                                                                                                                     </u>   </td>
 <td> (9)</td>
 </tr>
 <tr align=right>
 <td width=2100px><i><FONT size=1>(РНН, наименование и адрес места нахождения)                                                                                                                        </font></i></td>
 <td> </td>
 </tr>
  <tr>
 <td width=2100px> Получатель <u><?php echo "{$firm->name}"; ?>                </u></td>
 <td> (10)</td>
 </tr>
 <tr>
 <td width=2100px> РНН, БИН и адрес местонахождения получателя   <u><?php echo $firm->rnn.", ".$firm->bin." ".$firm->address; ?></u></td>
 <td> (10а)</td>
 </tr>
 <tr>
 <td width=2100px> Расчетный счет получателя <u><?php echo $firm->raschetnyy_schet;?></u> в банке <u><?php echo $bank->name;?></u>БИК <u><?php echo $bank->mfo;?></u></td>
 <td> (10б)</td>
 </tr>
 </table><br>
 <table cellSpacing=0 border=1>
 <TR>
    <td vAlign=center align=middle rowSpan=2><FONT size=2>№ п/п</FONT> 
    <td vAlign=center align=middle rowSpan=2><FONT size=2>Наименование товаров 
      (работ, услуг)</FONT> 
    <td vAlign=center align=middle rowSpan=2><FONT size=2>Ед. изм.</FONT> 
    <td vAlign=center align=middle rowSpan=2><FONT size=2>Кол-во 
      (объем)</FONT> 
    <td vAlign=center align=middle rowSpan=2><FONT size=2>Цена тенге</FONT> 
    <td vAlign=center align=middle rowSpan=2><FONT size=2>Стоимость товаров 
      (работ, услуг) без НДС</FONT> 
    <td vAlign=center align=middle colSpan=2><FONT size=2>НДС</FONT> 
    <td vAlign=center align=middle rowSpan=2><FONT size=2>Всего стоимость 
      реализации</FONT> 
    <td vAlign=center align=middle colSpan=2><FONT size=2>Акциз</FONT> </td>
  <TR>
    <td vAlign=center align=middle><FONT size=2>Ставка</FONT> 
    <td vAlign=center align=middle><FONT size=2>Сумма</FONT> 
    <td vAlign=center align=middle><FONT size=2>Ставка</FONT> 
    <td vAlign=center align=middle><FONT size=2>Сумма</FONT> </td>
  <TR>
    <td vAlign=center align=middle><FONT size=1><I>1</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>2</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>3</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>4</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>5</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>6</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>7</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>8</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>9</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>10</I></FONT> 
    <td vAlign=center align=middle><FONT size=1><I>11</I></FONT> </td>
	<?php $sum_bez_nds=0;$sum_nds=0;$sum=0;$i=1;
	for($j=0;$j<$tariff_count;$j++):  
	if ($tariff_kvt[$j]==0) continue;
	?>
	<TR>
		<td vAlign=center align=middle><FONT size=1><?php echo $i++;?> </FONT> 
		<td vAlign=center align=middle><FONT size=1>Электроэнергия</FONT> 
		<td vAlign=center align=middle><FONT size=1>кВт</FONT> 
		<td vAlign=center align=middle><FONT size=1> 
		<?php echo f_d3($tariff_kvt[$j]); ?> </FONT> 
		<td vAlign=center align=middle><FONT size=1> 
		<?php echo f_d_nums($tariff_value[$j],2);?> </FONT>
		<td vAlign=center align=middle><FONT size=1> 
		<?php 
		echo f_d3($tariff_kvt[$j]*$tariff_value[$j]);
		$sum_bez_nds+=f_d4($tariff_kvt[$j]*$tariff_value[$j]);	
		?> </FONT> 
		<td vAlign=center align=middle><FONT size=1> <?php echo f_d3($period->nds);?> </FONT> 
		<td vAlign=center align=middle><FONT size=1> 
		<?php echo f_d3($period->nds*$tariff_kvt[$j]*$tariff_value[$j]/100);
		$sum_nds+=$period->nds*$tariff_kvt[$j]*$tariff_value[$j]/100;?> 
		</FONT> 
		<td vAlign=center align=middle><FONT size=1> 
		<?php echo 
		f_d3(($period->nds+100)*$tariff_kvt[$j]*$tariff_value[$j]/100);
		$sum+=($period->nds+100)*$tariff_kvt[$j]*$tariff_value[$j]/100;?> 
		</FONT> 
		<td vAlign=center align=middle><FONT size=1>0</FONT> 
		<td vAlign=center align=middle><FONT size=1>0</FONT> </td>
<?php endfor;?>
  <TR>
    <td align=left colSpan=5><FONT size=2><B>Всего по счету:</B></FONT> 
    <td align=right><FONT size=2><B>&nbsp;<?php echo f_d4($sum_bez_nds);?></B></FONT> 
    <td align=right bgColor=#c0c0c0><FONT size=2>&nbsp;</FONT> 
    <td align=right><FONT size=2><B>&nbsp;<?php echo f_d4($sum_nds);?></B></FONT> 
    <td align=right><FONT size=2><B>&nbsp;<?php echo f_d4($sum_bez_nds + $sum_nds);?></B></FONT> 
    <td align=right bgColor=#c0c0c0><FONT size=2>&nbsp;</FONT> 
    <td align=right><FONT size=2><B>&nbsp;</B></FONT> </td>
 
 </table>
 <center>
 <?php echo num2str(f_d4($sum_bez_nds + $sum_nds));?>
 </center>
	<br>
	<table width=100%  >
	<tr>
	<td align=left>Уполномоченный подписывать счета фактуры за руководителя согласно приказа №64 от 31.12.2015г.:</td><td align=right>ВЫДАЛ (Ответственное лицо поставщика)</td>
	</tr>
	<tr>
	<td align=left><?php echo 'Ташкенова С.С.'; ?>____________</td><td align=right>Техник ____________________________</td>
	</tr>
	<tr>
	<td align=left>(Ф.И.О., подпись)</td><td align=right>(Ф.И.О., подпись)</td>
	</tr>
	<tr>
	<td align=left>&nbsp; </td><td align=right>&nbsp;</td>
	</tr>
	
	<tr>
	<td align=left>Уполномоченный подписывать счета фактуры за главного бухгалтера согласно приказа №64 от 31.12.2015 г.:</td><td align=right>Бухгалтер потребителя&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	<td align=left><?php echo 'Ташкенова С.С.';; ?>______________</td><td align=right>___________________</td>
	</tr>
	<tr>
	<td align=left>(Ф.И.О., подпись)</td><td align=right>(Ф.И.О., подпись)</td>
	</tr>
	<tr>
	<td align=left><br />Примечание. Без печати недействительно.<br />Оригинал (первый экземпляр)-покупателю.<br />Копия (второй экземпляр)-поставщику.</td><td ></td>
	</tr>
	</table>
</body>
</html>