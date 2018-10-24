<?php echo anchor("billing/access_right_index", "На главную"); ?><br>
<h3>Список разрешений</h3>
<br>
<table>
    <tr>
        <td>
            <fieldset>
                <legend>Добавить</legend>
                <?php echo form_open("billing/add_permission"); ?>
                <table>
                    <tr>
                        <td>Ссылка</td>
                        <td><input type="text" name="link" value=""></td>
                    </tr>
                    <tr>
                        <td>Наименование</td>
                        <td><input type="text" name="title" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="add" value="Сохранить"></td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </fieldset>
        </td>
    </tr>
</table>
<br><br>
<table class="border-table striped-table">
    <thead>
    <tr>
        <th>№</th>
        <th>Ссылка</th>
        <th>Наименование</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($perm as $p): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $p->link; ?></td>
            <td><?php echo $p->title; ?></td>
            <td><?php echo anchor("billing/edit_permission_data/{$p->id}","Редактировать"); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
