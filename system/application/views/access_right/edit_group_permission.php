<?php echo anchor("billing/user_group", "К списку групп"); ?><br>
<h3>Полномочия группы: <?php echo $group_info->name; ?></h3>
<table class="border-table">
    <thead>
    <tr>
        <th>№</th>
        <th>Наименование</th>
        <th>Ссылка</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($user_group_permission as $usp): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $usp->permission_title; ?></td>
            <td><?php echo $usp->permission_link; ?></td>
            <td>
                <?php
                switch($usp->has){
                    case '0':
                        echo anchor("billing/add_group_permission/{$usp->user_group_id}/{$usp->permission_id}","Добавить");
                        break;
                    case '1':
                        echo anchor("billing/delete_group_permission/{$usp->user_group_id}/{$usp->permission_id}","Удалить");
                        break;
                    default:
                        break;
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>