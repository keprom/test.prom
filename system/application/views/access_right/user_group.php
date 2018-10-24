<?php echo anchor("billing/access_right_index", "На главную"); ?><br>
<h3>Список групп</h3>
<table class="border-table">
    <thead>
    <tr>
        <th>№</th>
        <th>Наименование</th>
        <th>Пользователи</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($user_group as $g): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $g->ug_name; ?></td>
            <td><?php echo anchor("billing/group_user/{$g->ug_id}", $g->user_count); ?></td>
            <td><?php echo anchor("billing/edit_group_permission/{$g->ug_id}", "Полномочия"); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<br><br>
<table>
    <tr>
        <td>
            <fieldset>
                <legend>Добавить пользователя</legend>
                <?php echo form_open("billing/add_user"); ?>
                <table>
                    <tr>
                        <td>ФИО</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Должность</td>
                        <td><input type="text" name="profa"></td>
                    </tr>
                    <tr>
                        <td>Группа</td>
                        <td>
                            <select name="group_id" id="">
                                <?php foreach ($user_group as $ug): ?>
                                    <option value="<?php echo $ug->ug_id; ?>"><?php echo $ug->ug_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Пароль</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Добавить"></td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </fieldset>
        </td>
    </tr>
</table>
