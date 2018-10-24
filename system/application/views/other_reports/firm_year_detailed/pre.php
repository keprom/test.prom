<fieldset>
    <legend>Годовая ведомость по организации</legend>
    <?php echo form_open("billing/firm_year_detailed"); ?>
    <select name="firm_id" id="" style="width: 200px">
        <?php foreach ($firm as $f): ?>
            <option value="<?php echo $f->id; ?>"><?php echo $f->dogovor . " " . $f->name; ?></option>
        <?php endforeach; ?>
    </select>
    <select name="period_year" id="">
        <?php foreach ($period_year as $p): ?>
            <option value="<?php echo $p->period_year; ?>"><?php echo $p->period_year; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Открыть">
    <label for="to_excel"><input type="checkbox" name="to_excel" value="1">в Excel</label>
    <?php echo form_close(); ?>
</fieldset>