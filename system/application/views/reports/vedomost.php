<?php
//function f_d($var)
//{
//    if ($var == null) return " ";
//    if ($var == 0) return " "; else
//        return sprintf("%22.2f", $var);
//}
//
//function datetostring($date)
//{
//    $d = explode("-", $date);
//    return $d['0'] . '.' . $d['1'] . '.' . $d['2'];
//}
//
//?>
<!--<html>-->
<!--<head>-->
<!--    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>-->
<!--    <style>-->
<!--        .other-counter td {-->
<!--            background-color: #fff;-->
<!--        }-->
<!---->
<!--        .another-counter td {-->
<!--            background-color: #D0D0D0;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<table width=100%>-->
<!--    <tr>-->
<!--        <td align=center><b>Ведомость электропотребления </b></td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td align=center><b>--><?php //echo $itogo->period_name; ?><!--</b></td>-->
<!--    </tr>-->
<!--</table>-->
<!--<br>-->
<!---->
<!--<table width=100%>-->
<!--    <tr>-->
<!--        <td width=900px>--><?php //echo $firm->name; ?><!--</td>-->
<!--        <td width=900px>Адрес --><?php //echo $firm->address; ?><!--</td>-->
<!--        <td width=400px>Абонент --><?php //echo $firm->dogovor; ?><!--</td>-->
<!--        <td width=500px>РНН --><?php //echo $firm->rnn; ?><!--</td>-->
<!--        <td width=400px>Тел:--><?php //echo $firm->telefon; ?><!--</td>-->
<!--    </tr>-->
<!--</table>-->
<!---->
<!--<table border=1px>-->
<!--    <tr>-->
<!--        <td width=130px>Дог.</td>-->
<!--        <td width=150px>Т.У.</td>-->
<!--        <td width=510px>Наименование т.у.</td>-->
<!--        <td width=160px>Тариф</td>-->
<!--        <td width=200px>Номер счетчика</td>-->
<!--        <td width=240px>Показание старое</td>-->
<!--        <td width=240px>Показание новое</td>-->
<!--        <td width=250px>Разность показаний</td>-->
<!--        <td width=150px>Расчет. коэф.</td>-->
<!--        <td width=250px>Учтенный расход</td>-->
<!--        <td width=250px>Не учт. расход</td>-->
<!--        <td width=250px>Итоговый расход</td>-->
<!--        <td width=130px>Тариф</td>-->
<!--        <td width=300px>Сумма без НДС</td>-->
<!--    </tr>-->
<!--    --><?php
//    $last_gn = "-1";
//    $a1 = '.other-counter';
//    $a2 = '.another-counter';
//    ?>
<!--    --><?php //foreach ($vedomost->result() as $v): ?>
<!--    --><?php
//        if ($v->gos_nomer !== $last_gn){
//            $row_class = $a1;
//        } else {
//            $row_class = $a2;
//        }
//        ?>
<!--        <tr class="--><?php //echo $row_class;?><!--">-->
<!--            <td width="130px">--><?php //echo $v->dogovor; ?><!--</td>-->
<!--            <td width="150px">--><?php //echo $v->bill_id; ?><!--</td>-->
<!--            <td width="510px">--><?php //echo $v->bill_name; ?><!--</td>-->
<!--            <td width="160px">--><?php //if ($v->tariff_name == "Многоуровневый") {
//                    if ($v->pokaz_uroven != 0) {
//                        echo "Уровень " . $v->pokaz_uroven;
//                    }
//                    if ($v->nadbavka_uroven != 0) {
//                        echo "Уровень " . $v->nadbavka_uroven;
//                    }
//                    if (($v->pokaz_uroven == 0) && ($v->nadbavka_uroven == 0)) {
//                        echo "Общий основной";
//                    }
//                } else {
//                    echo $v->tariff_name;
//                } ?><!--</td>-->
<!--            <td width="200px" align="center">--><?php //echo $v->gos_nomer; ?><!--</td>-->
<!--            <td width="240px" align="right">--><?php //echo $v->old_pokaz; ?><!--</td>-->
<!--            <td width="240px" align="right">--><?php //echo $v->new_pokaz; ?><!--</td>-->
<!--            <td width="250px" align="right">--><?php //echo f_d($v->counter_diff); ?><!--</td>-->
<!--            <td width="150px" align="right">--><?php //echo sprintf("%22.0f", $v->transform); ?><!--</td>-->
<!--            <td width="250px" align="right">--><?php //echo f_d($v->itogo_uchtennyy_kvt); ?><!--</td>-->
<!--            <td width="250px" align="right">--><?php //echo f_d($v->neuchtennyy); ?><!--</td>-->
<!--            <td width="250px" align="right">--><?php //echo f_d($v->itogo_kvt); ?><!--</td>-->
<!--            <td width="130px" align="right">--><?php //echo sprintf("%22.2f", $v->tariff_value); ?><!--</td>-->
<!--            <td width="300px" align="right">--><?php //echo f_d($v->itogo_tenge); ?><!--</td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--</table>-->
<!--<table width=100%>-->
<!--    <tr>-->
<!--        <td width="1650px"></td>-->
<!--        <td width="430px">По предприятию</td>-->
<!--        <td width="200px"><b>--><?php //echo $itogo->uch_kvt; ?><!--</b></td>-->
<!--        <td width="250px" align="right"><b>--><?php //echo $itogo->neuch_kvt; ?><!--</b></td>-->
<!--        <td width="250px" align="right"><b>--><?php //echo $itogo->itog_kvt; ?><!--</b></td>-->
<!--        <td width="150px"></td>-->
<!--        <td width="280px" align="right"><b>--><?php //echo $itogo->itog_tenge; ?><!--</b></td>-->
<!--    </tr>-->
<!--</table>-->
<!--<table width=100%>-->
<!--    <tr align=right>-->
<!--        <td width=2400px><b>НДС</b></td>-->
<!--        <td width=800px><b>--><?php //echo f_d($itogo->itogo_nds); ?><!--</b></td>-->
<!--    </tr>-->
<!--    <tr align=right>-->
<!--        <td width=2400px><b>Начислено</b></td>-->
<!--        <td width=800px><b>--><?php //echo f_d($itogo->itogo_with_nds); ?><!--</b></td>-->
<!--    </tr>-->
<!--    <tr align=right>-->
<!--        <td width=2400px><b>Сальдо на начало текущего месяца</b></td>-->
<!--        <td width=800px><b>--><?php //echo f_d($itogo->saldo_value); ?><!--</b></td>-->
<!--    </tr>-->
<!--    <tr align=right>-->
<!--        <td width=2400px><b>Оплата текущего месяца</b></td>-->
<!--        <td width=800px><b>--><?php //echo f_d(($oplata_value == null) ? 0 : $oplata_value); ?><!--</b></td>-->
<!--    </tr>-->
<!--    <tr align=right>-->
<!--        <td width=2400px><b>Сальдо на конец текущего месяца</b></td>-->
<!--        <td width=800px><b>-->
<!--                --><?php
//                $saldo_end = $itogo->saldo_value - $oplata_value + $itogo->itogo_with_nds;
//                $saldo_end2 = $saldo_end + $itogo->itogo_with_nds + $fine_giveout_value;
//                echo f_d($saldo_end);
//                ?>
<!--            </b>-->
<!--        </td>-->
<!--    </tr>-->
<!---->
<!--    <tr align=right>-->
<!--        <td width=2400px><b>Начисление договорного обьема следующего периода</b></td>-->
<!--        <td width=800px><b>-->
<!--                --><?php
//                echo f_d($itogo->itogo_with_nds);
//                ?>
<!--            </b>-->
<!--        </td>-->
<!--    </tr>-->
<!---->
<!--    <!--fine-->-->
<!--    --><?php //if (($is_fine) and ($period_id >= 116)): ?>
<!--        <tr align=right>-->
<!--            <td width=2400px><b>Начислено пени на день выдачи ведомости (--><?php //echo $giveout_date; ?><!--)</b></td>-->
<!--            <td width=800px><b>-->
<!--                    --><?php
//                    echo $fine_giveout_value;
//                    ?>
<!--                </b>-->
<!--            </td>-->
<!--        </tr>-->
<!--    --><?php //endif; ?>
<!--    <!--end of fine-->-->
<!---->
<!--    <tr align=right>-->
<!--        <td width=2400px><b>ИТОГО К ОПЛАТЕ</b></td>-->
<!--        <td width=800px><b>-->
<!--                --><?php
//                if ($saldo_end2 > 0) $pred = $saldo_end2; else $pred = 0;
//                echo f_d($pred);
//                ?>
<!--            </b></td>-->
<!--    </tr>-->
<!---->
<!--    <!----->
<!--<tr align=right>-->
<!--<td width=2300px><b>100% предоплата + к оплате</b></td><td width=800px><b>-->
<?php ////echo f_d($itogo->last_nachisleno + $opl); ?>
<!--</b></td>-->
<!--</tr>-->
<!--</table>--->-->
<!--    <table width=100%>-->
<!--        <tr align=right>-->
<!--            <td width=20%><b>Подписи поставщика</b></td>-->
<!--        </tr>-->
<!--    </table>-->
<!---->
<!--</body>-->
<!--</html>-->


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ведомость #<?php echo $firm->dogovor; ?> за <?php echo $itogo->period_name; ?></title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
    <style>
        .other-counter td {
            background-color: #fff;
        }

        .another-counter td {
            background-color: #D0D0D0;
        }
    </style>
</head>
<body class="landscape">
<table class="block">
    <tr>
        <td align=center><b>Ведомость электропотребления </b></td>
    </tr>
    <tr>
        <td align=center><b><?php echo $itogo->period_name; ?></b></td>
    </tr>
</table>
<br>

<table class="block">
    <tr>
        <td width='900px'><?php echo $firm->name; ?></td>
        <td width='900px'>Адрес <?php echo $firm->address; ?></td>
        <td width='400px'>Абонент <?php echo $firm->dogovor; ?></td>
        <td width='500px'>РНН <?php echo $firm->rnn; ?></td>
        <td width='400px'>Тел:<?php echo $firm->telefon; ?></td>
    </tr>
</table>

<table class="border-table">
    <thead>
    <tr>
        <th width='130px'>Дог.</th>
        <th width='150px'>Т.У.</th>
        <th width='510px'>Наименование т.у.</th>
        <th width='160px'>Тариф</th>
        <th width='200px'>Номер счетчика</th>
        <th width='240px'>Показание старое</th>
        <th width='240px'>Показание новое</th>
        <th width='250px'>Разность показаний</th>
        <th width='150px'>Расчет. коэф.</th>
        <th width='250px'>Учтенный расход</th>
        <th width='250px'>Не учт. расход</th>
        <th width='250px'>Итоговый расход</th>
        <th width='130px'>Тариф</th>
        <th width='300px'>Сумма без НДС</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($vedomost->result() as $v): ?>
        <tr>
            <td width="130px"><?php echo $v->dogovor; ?></td>
            <td width="150px"><?php echo $v->bill_id; ?></td>
            <td width="510px"><?php echo $v->bill_name; ?></td>
            <td width="160px"><?php if ($v->tariff_name == "Многоуровневый") {
                    if ($v->pokaz_uroven != 0) {
                        echo "Уровень " . $v->pokaz_uroven;
                    }
                    if ($v->nadbavka_uroven != 0) {
                        echo "Уровень " . $v->nadbavka_uroven;
                    }
                    if (($v->pokaz_uroven == 0) && ($v->nadbavka_uroven == 0)) {
                        echo "Общий основной";
                    }
                } else {
                    echo $v->tariff_name;
                } ?></td>
            <td width="200px" align="center"><?php echo $v->gos_nomer; ?></td>
            <td width="240px" class="td-number"><?php echo prettify_number($v->old_pokaz); ?></td>
            <td width="240px" class="td-number"><?php echo prettify_number($v->new_pokaz); ?></td>
            <td width="250px" class="td-number"><?php echo prettify_number($v->counter_diff); ?></td>
            <td width="150px" class="td-number"><?php echo prettify_number($v->transform, 0); ?></td>
            <td width="250px" class="td-number"><?php echo prettify_number($v->itogo_uchtennyy_kvt); ?></td>
            <td width="250px" class="td-number"><?php echo prettify_number($v->neuchtennyy); ?></td>
            <td width="250px" class="td-number"><?php echo prettify_number($v->itogo_kvt); ?></td>
            <td width="130px" class="td-number"><?php echo prettify_number($v->tariff_value); ?></td>
            <td width="300px" class="td-number"><?php echo prettify_number($v->itogo_tenge); ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="9" align="right"><b>По предприятию</b></td>
        <td class="td-number"><b><?php echo prettify_number($itogo->uch_kvt, 3); ?></b></td>
        <td class="td-number"><b><?php echo prettify_number($itogo->neuch_kvt, 3); ?></b></td>
        <td class="td-number"><b><?php echo prettify_number($itogo->itog_kvt, 3); ?></b></td>
        <td></td>
        <td class="td-number"><b><?php echo prettify_number($itogo->itog_tenge); ?></b></td>
    </tr>
    </tbody>
</table>
<br>
<table>
    <tr align=right>
        <td width=2400px><b>НДС</b></td>
        <td width=800px><b><?php echo prettify_number($itogo->itogo_nds); ?></b></td>
    </tr>
    <tr align=right>
        <td width=2400px><b>Начислено</b></td>
        <td width=800px><b><?php echo prettify_number($itogo->itogo_with_nds); ?></b></td>
    </tr>
    <tr align=right>
        <td width=2400px><b>Сальдо на начало текущего месяца</b></td>
        <td width=800px><b><?php echo prettify_number($itogo->saldo_value); ?></b></td>
    </tr>
    <tr align=right>
        <td width=2400px><b>Оплата текущего месяца</b></td>
        <td width=800px><b><?php echo prettify_number(($oplata_value == null) ? 0 : $oplata_value); ?></b></td>
    </tr>
    <tr align=right>
        <td width=2400px><b>Сальдо на конец текущего месяца</b></td>
        <td width=800px><b>
                <?php
                $saldo_end = $itogo->saldo_value - $oplata_value + $itogo->itogo_with_nds;
                $saldo_end2 = $saldo_end + $itogo->itogo_with_nds + $fine_giveout_value + $fine_saldo;
                echo prettify_number($saldo_end);
                ?>
            </b></td>
    </tr>

    <tr align=right>
        <td width=2400px><b>Начисление договорного обьема следующего периода</b></td>
        <td width=800px><b>
                <?php
                echo prettify_number($itogo->itogo_with_nds);
                ?>
            </b>
        </td>
    </tr>

    <!--fine-->
    <?php if (($is_fine) and ($period_id >= 116)): ?>
        <tr align=right>
            <td width=2400px><b>Саль пени на начало месяца</b></td>
            <td width=800px><b>
                    <?php echo prettify_number($fine_saldo); ?>
                </b>
            </td>
        </tr>
        <tr align=right>
            <td width=2400px><b>Начислено пени на день выдачи ведомости (<?php echo $giveout_date; ?>)</b></td>
            <td width=800px><b>
                    <?php echo prettify_number($fine_giveout_value); ?>
                </b>
            </td>
        </tr>
    <?php endif; ?>
    <!--end of fine-->

    <tr align=right>
        <td width=2400px><b>ИТОГО К ОПЛАТЕ</b></td>
        <td width=800px><b>
                <?php
                if ($saldo_end2 > 0) $pred = $saldo_end2; else $pred = 0;
                echo prettify_number($pred);
                ?>
            </b></td>
    </tr>

</table>
<table class="block">
    <tr align=right>
        <td width=20%><b>Подписи поставщика</b></td>
    </tr>
</table>
<script>
    // window.print();
</script>
</body>
</html>