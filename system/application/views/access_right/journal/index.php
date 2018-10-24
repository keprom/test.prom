<?php echo anchor("billing/access_right_index", "На главную"); ?><br><br>
<?php echo form_open("billing/access_journal_day"); ?>
<table>
    <tr>
        <td>Пользователь</td>
        <td>
            <select name="user_id" id="">
                <?php foreach ($user as $u): ?>
                    <option value="<?php echo $u->id; ?>"><?php echo $u->name; ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Дата</td>
        <td><input type="date" name="action_time"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Открыть"></td>
    </tr>
</table>
<?php echo form_close(); ?>
