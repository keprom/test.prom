<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url() . 'css/fullpage.css'; ?>">
</head>
<body>
<table class="border-table">
    <caption></caption>
    <thead>
    <tr>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($report as $r): ?>
    <tr>
        <td><?php echo $r->; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>