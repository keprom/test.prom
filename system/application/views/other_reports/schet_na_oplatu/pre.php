<?php echo anchor("billing/firm/".$firm_id, "назад к фирме"); ?><br><br>
<fieldset>
    <legend>Счет на оплату (СФ)</legend>
    <form action="<?php echo site_url() . "/billing/pre_schet_na_oplatu2/".$firm_id; ?>" method="post">
        <select name="period_id" id="">
            <?php foreach ($period as $p): ?>
                <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Открыть">
    </form>
</fieldset>