<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/fullpage.css" type="text/css" media="screen,projection"/>
    <title>Document</title>
    <style>
        .td-odd {
            background-color: #D0D0D0;
        }
    </style>
</head>
<body>

<table class="border-table">
    <caption><?php echo "№" . $firm->dogovor . " " . $firm->name . ", " . $year; ?></caption>
    <thead>
    <tr>
        <th>Месяц</th>
        <th>Сальдо (н)</th>
        <th>кВт</th>
        <th>Начислено</th>
        <th>Оплачено</th>
        <th>Сальдо (к)</th>
    </tr>

    </thead>

    <tbody>

    <?php $i = 1; ?>
    <?php foreach ($report as $r): ?>
        <tr class="<?php echo ($i++ % 2) == 0 ? "td-odd" : ""; ?>">
            <td><?php echo $r->period_name; ?></td>
            <td class="td-number"><?php echo prettify_number($r->saldo_start); ?></td>
            <td class="td-number"><?php echo prettify_number($r->itog_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->itogo_with_nds); ?></td>
            <td class="td-number"><?php echo prettify_number($r->oplata_value); ?></td>
            <td class="td-number"><?php echo prettify_number($r->saldo_end); ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

</body>
</html>