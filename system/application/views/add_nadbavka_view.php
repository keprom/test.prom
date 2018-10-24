<fieldset>
    <?php echo form_open("billing/adding_ot_nadbavka"); ?>
    <input type=hidden name="billing_point_id" value="<?php echo $point_id; ?>">
    Количество надбавки <input name=value>
    <input type=submit value='Добавить надбавку'>
    <?php echo form_close(); ?>
</fieldset>
