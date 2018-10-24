<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Информация по точкам учета</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
    <style>
        body {
            font-size: x-small;
            font-family: Verdana;
        }

        .td-first {
            width: 90px;
        }
    </style>
</head>
<body>
<table class="border-table stripped-table">
    <thead>
    <tr>
        <th class="td-first">№</th>
        <th>ТУРЭ</th>
        <th>№ дог.</th>
        <th>Наименование предприятия</th>
        <th style="width: 200px;">Наименование обьекта</th>
        <th>Место установки учета</th>
        <th>Тип счетчика</th>
        <th>Номер счетчика</th>
        <th>Дата гос.проверки</th>
        <th>Коэфициент трансформации</th>
        <th>Установленная мощность эл. установок</th>
        <!--        <th>Кол-во часов работы в сутки</th>-->
        <!--        <th>Кол-во выходных</th>-->
        <th>Ампераж
        </td>
    </tr>
    </thead>
    <tbody>
    <?php $j = 1; ?>
    <?php $j = 1;
    foreach ($report as $r): ?>
        <tr>
            <td class="td-first"><?php echo $j++; ?></td>
            <td><?php echo $r->ture_name; ?></td>
            <td><?php echo $r->firm_dogovor; ?></td>
            <td><?php echo $r->firm_name; ?></td>
            <td style="width: 200px;"><?php echo $r->billing_point_name; ?></td>
            <td><?php echo $r->billing_point_address; ?></td>
            <td><?php echo $r->counter_type_name; ?></td>
            <td><?php echo $r->gos_nomer; ?></td>
            <td><?php echo $r->data_gos_proverki; ?></td>
            <td><?php echo $r->transform; ?></td>
            <td><?php echo $r->power; ?></td>
            <!--            <td>--><?php //echo $r->time_in_day; ?><!--</td>-->
            <!--            <td>--><?php //echo $r->not_worked_day; ?><!--</td>-->
            <td><?php echo $r->amper; ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>