<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список счетчиков, подлежащих гос.проверке</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
    <style>
        body {
            font-size: small;
        }
    </style>
</head>
<body>
<table class="border-table striped-table">
    <caption>Список счетчиков, гос.проверка которых было проведена <?php echo $year_diff; ?> лет назад</caption>
    <thead>
    <tr>
        <th>№</th>
        <th>Абонент</th>
        <th>ТП</th>
        <th>Точка учета</th>
        <th>Госномер счетчика</th>
        <th>Дата гос.проверки</th>
        <th>Примечание</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($report as $r): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td style="width: 200px;"><?php echo $r->dogovor." ".$r->firm_name; ?></td>
            <td><?php echo $r->tp_name; ?></td>
            <td style="width: 200px;"><?php echo $r->bill_name; ?></td>
            <td><?php echo $r->gos_nomer; ?></td>
            <td><?php echo $r->data_gos_proverki; ?></td>
            <td></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>