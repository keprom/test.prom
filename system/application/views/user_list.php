<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> Список пользователей </h2>
<table class="border-table">
    <tr>
        <th>Имя пользователя</th>
        <th>Группа</th>
        <th>Логин</th>
        <th>Редактирование</th>
    </tr>
    <?php
    foreach ($users->result() as $user)
    {
        echo "<tr><td>{$user->name}</td><td>{$user->profa}</td><td>{$user->login}</td><td>".anchor("billing/edit_permission/".$user->id,"редактировать")."</td></tr>";
    }
    ?>
</table>
</body>
</html>

