<?php echo anchor("billing/permission", "К списку разрешений"); ?><br>
<table>
    <tr>
        <td>
            <fieldset>
                <?php echo form_open("billing/edit_permission_data"); ?>
                <table>
                    <tr>
                        <td>Ссылка</td>
                        <td><input type="text" name="link" value="<?php echo $perm_info->link; ?>"></td>
                    </tr>
                    <tr>
                        <td>Наименование</td>
                        <td><input type="text" name="title" value="<?php echo $perm_info->title; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id" value="<?php echo $perm_info->id; ?>"></td>
                        <td><input type="submit" name="save" value="Сохранить"></td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </fieldset>
        </td>
    </tr>
</table>

