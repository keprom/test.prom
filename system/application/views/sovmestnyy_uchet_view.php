<fieldset>
    <legend><h3>Совместный относительный учет</h3></legend>
    <table class="border-table">
        <thead>
        <tr>
            <th>Месяц</th>
            <th>Родительская фирма</th>
            <th>ТУ</th>
            <th>Значение, %</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($query->result() as $row): ?>
            <tr>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->parent_firm_name; ?></td>
                <td><?php echo $row->billing_point_name; ?></td>
                <td class="td-number"><?php echo prettify_number($row->sov_value); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</fieldset>

<br>
<hr>
<h3>Добавление относительного совместного учета</h3>
<?php echo form_open("billing/adding_sovm_otn"); ?>
<input type=hidden name="child_point_id" value="<?php echo $point_id; ?>"/>
Количество <input name=value>%
Родительская фирма
<select name="parent_firm_id">
    <?php foreach ($firms->result() as $row): ?>
        <option value="<?php echo $row->id; ?>"><?php echo $row->firm_info; ?></option>
    <?php endforeach; ?>
</select>
<br><br>
<input type=submit value="Добавить совместный учет">
<?php echo form_close(); ?>
