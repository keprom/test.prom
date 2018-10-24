<fieldset style="display: inline;">
    <legend>Номера счет-фактур</legend>
    <?php echo form_open("billing/number_of_schet"); ?>
    <select name="period_id" id="">
        <?php foreach($period as $p): ?>
            <option value="<?php echo $p->id ?>" <?php echo $p->checked; ?>><?php echo $p->name; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Открыть">
    <?php echo form_close(); ?>
</fieldset>
