<?php echo anchor("billing/user_group", "Назад"); ?><br>
<h3>Список пользователей группы <?php echo $group_info->name; ?></h3>
<table class="border-table">
    <thead>
    <tr>
        <th>№</th>
        <th>ФИО</th>
        <th>Должность</th>
        <th>Активен</th>
        <th colspan="2">Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($users as $u): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $u->name; ?></td>
            <td><?php echo $u->profa; ?></td>
            <td><?php echo $u->enabled; ?></td>
            <td><?php echo anchor("billing/delete_user/{$u->id}","Удалить"); ?></td>
            <td><?php echo anchor("billing/edit_user/{$u->id}","Редактировать"); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>