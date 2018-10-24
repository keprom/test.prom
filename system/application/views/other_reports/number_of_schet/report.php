<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
    <style>
        body {
            font-family: Verdana;
            font-size: xx-small;
        }
    </style>
</head>
<body>
<h4>Номера счет-фактур за <?php echo $period_info->name; ?></h4>
<table class="border-table stripped-table">
    <thead>
    <tr>
        <th>№</th>
        <th>Наименование</th>
        <th>Номер</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($nos as $n): ?>
        <tr>
            <td><?php echo $n->dogovor; ?></td>
            <td><?php echo $n->name; ?></td>
            <td><?php echo $n->id; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
<h4></h4>