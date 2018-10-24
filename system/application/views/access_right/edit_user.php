<?php echo anchor("billing/group_user/{$user->group_id}", "Назад к списку пользователей"); ?><br><br>
<?php echo form_open("billing/save_user_changes"); ?>
    <table>
        <tr>
            <td>ФИО</td>
            <td><input type="text" name="name" value="<?php echo $user->name; ?>"></td>
        </tr>
        <tr>
            <td>Должность</td>
            <td><input type="text" name="profa" value="<?php echo $user->profa; ?>"></td>
        </tr>

        <tr>
            <td>Группа</td>
            <td>
                <select name="group_id" id="">
                    <?php foreach ($user_group as $ug): ?>
                        <option <?php echo $ug->id == $user->group_id ? "selected" : ""; ?>
                                value="<?php echo $ug->id; ?>"><?php echo $ug->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Пароль</td>
            <td><input type="password" name="password" value="<?php echo $user->password; ?>"></td>
        </tr>
        <tr>
            <td>Активен</td>
            <td>
                <select name="enabled" id="">
                    <option <?php echo 't' == $user->enabled ? "selected" : ""; ?> value="t">Да</option>
                    <option <?php echo 'f' == $user->enabled ? "selected" : ""; ?> value="f">Нет</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $user->id; ?>"></td>
            <td><input type="submit" value="Сохранить"></td>
        </tr>
    </table>
<?php echo form_close(); ?>