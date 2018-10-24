<?php echo form_open('billing/edition_permission'); ?>

<table>
    <thead>
    <tr>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Имя пользователя</td>
        <td><input name=name value='<?php echo $perm['name']; ?>' size=50></input></td>
    </tr>
    <tr>
        <td>Логин пользователя</td>
        <td><input name=login value='<?php echo $perm['login']; ?>' size=50> </input></td>
    </tr>
    <tr>
        <td>Группа пользователя</td>
        <td><input name=profa value='<?php echo $perm['profa']; ?>' size=50> </input></td>
    </tr>
    </tbody>
</table>

<input type='hidden' name=id value=<?php echo $perm['id']; ?>>




<table class="border-table">
    <thead>
    <tr>
        <th>Действие</th>
        <th>Х</th>
    </tr>
    </thead>
    <tbody>
<tr>
    <td>Блокирован</td>
    <td><input type=checkbox name="enabled" <?php if ($perm['enabled'] != 't') echo 'checked'; ?>>
    </td>
</tr>
    <?php foreach ($perm as $key => $value): ?>
        <?php if (($key != 'id') and ($key != 'name') and ($key != 'login') and ($key != 'password') and ($key != 'enabled') and ($key != 'profa')): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><input type=checkbox name="<?php echo $key; ?>" <?php if ($value == 't') echo "checked"; ?>></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    </tbody>
</table>

<br>
<br>
<input type=submit value='Обновить данные'>

</form>