<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Годовая ведомость №<?php echo $firm->dogovor; ?> за <?php echo $period_year; ?> год</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
</head>
<body>
<table class="border-table striped-table">
    <caption><?php echo "Годовая ведомость №{$firm->dogovor} {$firm->name} за {$period_year} год"; ?></caption>
    <thead>
    <tr>
        <th rowspan="2">Период</th>
        <th colspan="2">По показаниям</th>
        <th colspan="2">Относительная надбавка</th>
        <th colspan="2">Абсолютная надбавка</th>
        <th colspan="2">Потери</th>
        <th colspan="2">Тарифицированный акт</th>
        <th colspan="2">Акт</th>
        <th colspan="2">Совм учет % (+)</th>
        <th colspan="2">Совм учет % (-)</th>
        <th colspan="2">Совм абс (+)</th>
        <th colspan="2">Совм абс (-)</th>
        <th colspan="2">Совм полного вычета</th>
        <th colspan="2">Итого</th>
    </tr>
    <tr>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
        <th>кВт</th>
        <th>тенге</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $col_sum_1_kvt = 0;
    $col_sum_1_tenge = 0;
    $col_sum_2_kvt = 0;
    $col_sum_2_tenge = 0;
    $col_sum_3_kvt = 0;
    $col_sum_3_tenge = 0;
    $col_sum_4_kvt = 0;
    $col_sum_4_tenge = 0;
    $col_sum_5_kvt = 0;
    $col_sum_5_tenge = 0;
    $col_sum_6_kvt = 0;
    $col_sum_6_tenge = 0;
    $col_sum_7_kvt = 0;
    $col_sum_7_tenge = 0;
    $col_sum_8_kvt = 0;
    $col_sum_8_tenge = 0;
    $col_sum_9_kvt = 0;
    $col_sum_9_tenge = 0;
    $col_sum_10_kvt = 0;
    $col_sum_10_tenge = 0;
    $col_sum_11_kvt = 0;
    $col_sum_11_tenge = 0;

    $sum_kvt = 0;
    $sum_tenge = 0;
    $row_sum_kvt = 0;
    $row_sum_tenge = 0;
    ?>
    <?php foreach ($report as $r): ?>
        <tr>
            <td><?php echo $r->period_name; ?></td>
            <td class="td-number"><?php echo prettify_number($r->counter_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->counter_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->otn_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->otn_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->abs_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->abs_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->poteri_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->poteri_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->tariff_akt_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->tariff_akt_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->akt_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->akt_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_perc_plus_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_perc_plus_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_perc_minus_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_perc_minus_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_abs_plus_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_abs_plus_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_abs_minus_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_abs_minus_tenge); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_counter_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($r->sovm_counter_tenge); ?></td>
            <?php
            $row_sum_kvt += $r->counter_kvt;
            $row_sum_kvt += $r->otn_kvt;
            $row_sum_kvt += $r->abs_kvt;
            $row_sum_kvt += $r->poteri_kvt;
            $row_sum_kvt += $r->tariff_akt_kvt;
            $row_sum_kvt += $r->akt_kvt;
            $row_sum_kvt += $r->sovm_perc_plus_kvt;
            $row_sum_kvt += $r->sovm_perc_minus_kvt;
            $row_sum_kvt += $r->sovm_abs_plus_kvt;
            $row_sum_kvt += $r->sovm_abs_minus_kvt;
            $row_sum_kvt += $r->sovm_counter_kvt;
            $row_sum_tenge += $r->counter_tenge;
            $row_sum_tenge += $r->otn_tenge;
            $row_sum_tenge += $r->abs_tenge;
            $row_sum_tenge += $r->poteri_tenge;
            $row_sum_tenge += $r->tariff_akt_tenge;
            $row_sum_tenge += $r->akt_tenge;
            $row_sum_tenge += $r->sovm_perc_plus_tenge;
            $row_sum_tenge += $r->sovm_perc_minus_tenge;
            $row_sum_tenge += $r->sovm_abs_plus_tenge;
            $row_sum_tenge += $r->sovm_abs_minus_tenge;
            $row_sum_tenge += $r->sovm_counter_tenge;


            $col_sum_1_kvt += $r->counter_kvt;
            $col_sum_2_kvt += $r->otn_kvt;
            $col_sum_3_kvt += $r->abs_kvt;
            $col_sum_4_kvt += $r->poteri_kvt;
            $col_sum_5_kvt += $r->tariff_akt_kvt;
            $col_sum_6_kvt += $r->akt_kvt;
            $col_sum_7_kvt += $r->sovm_perc_plus_kvt;
            $col_sum_8_kvt += $r->sovm_perc_minus_kvt;
            $col_sum_9_kvt += $r->sovm_abs_plus_kvt;
            $col_sum_10_kvt += $r->sovm_abs_minus_kvt;
            $col_sum_11_kvt += $r->sovm_counter_kvt;
            $col_sum_1_tenge += $r->counter_tenge;
            $col_sum_2_tenge += $r->otn_tenge;
            $col_sum_3_tenge += $r->abs_tenge;
            $col_sum_4_tenge += $r->poteri_tenge;
            $col_sum_5_tenge += $r->tariff_akt_tenge;
            $col_sum_6_tenge += $r->akt_tenge;
            $col_sum_7_tenge += $r->sovm_perc_plus_tenge;
            $col_sum_8_tenge += $r->sovm_perc_minus_tenge;
            $col_sum_9_tenge += $r->sovm_abs_plus_tenge;
            $col_sum_10_tenge += $r->sovm_abs_minus_tenge;
            $col_sum_11_tenge += $r->sovm_counter_tenge;
            ?>
            <td class="td-number"><?php echo prettify_number($row_sum_kvt); ?></td>
            <td class="td-number"><?php echo prettify_number($row_sum_tenge); ?></td>
            <?php
            $row_sum_kvt = 0;
            $row_sum_tenge = 0;
            ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
    <?php
    $sum_kvt += $col_sum_1_kvt;
    $sum_kvt += $col_sum_2_kvt;
    $sum_kvt += $col_sum_3_kvt;
    $sum_kvt += $col_sum_4_kvt;
    $sum_kvt += $col_sum_5_kvt;
    $sum_kvt += $col_sum_6_kvt;
    $sum_kvt += $col_sum_7_kvt;
    $sum_kvt += $col_sum_8_kvt;
    $sum_kvt += $col_sum_9_kvt;
    $sum_kvt += $col_sum_10_kvt;
    $sum_kvt += $col_sum_11_kvt;
    $sum_tenge += $col_sum_1_tenge;
    $sum_tenge += $col_sum_2_tenge;
    $sum_tenge += $col_sum_3_tenge;
    $sum_tenge += $col_sum_4_tenge;
    $sum_tenge += $col_sum_5_tenge;
    $sum_tenge += $col_sum_6_tenge;
    $sum_tenge += $col_sum_7_tenge;
    $sum_tenge += $col_sum_8_tenge;
    $sum_tenge += $col_sum_9_tenge;
    $sum_tenge += $col_sum_10_tenge;
    $sum_tenge += $col_sum_11_tenge;
    ?>
    <tr>
        <th align="left">За год</th>
        <th class="td-number"><?php echo prettify_number($col_sum_1_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_1_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_2_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_2_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_3_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_3_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_4_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_4_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_5_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_5_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_6_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_6_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_7_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_7_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_8_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_8_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_9_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_9_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_10_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_10_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_11_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($col_sum_11_tenge); ?></th>
        <th class="td-number"><?php echo prettify_number($sum_kvt); ?></th>
        <th class="td-number"><?php echo prettify_number($sum_tenge); ?></th>
    </tr>
    </tfoot>
</table>
</body>
</html>