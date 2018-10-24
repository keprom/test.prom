<?php echo form_open('billing/year_saldo'); ?>
    <fieldset>
        <legend>Сальдо по месяцам</legend>
        <select name="period_year" id="">
            <?php foreach ($period_years as $year): ?>
                <option value="<?php echo $year->period_year; ?>"><?php echo $year->period_year; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="firm_id" id="" style="width: 200px;">
            <?php foreach ($firms as $f): ?>
                <option value="<?php echo $f->id; ?>"><?php echo $f->dogovor." ".$f->name; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Выдать">
    </fieldset>
<?php echo form_close(); ?>