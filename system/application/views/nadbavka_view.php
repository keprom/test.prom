<fieldset>
    <legend><h3>Относительные надбавки:</h3></legend>
    <table class="border-table">
        <caption></caption>
        <thead>
        <tr>
            <th>Месяц</th>
            <th>Значение надбавки</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($nadbavka->result() as $row): ?>
            <tr>
                <td><?php echo $row->name; ?></td>
                <td class="td-number"><?php echo prettify_number($row->value) . " " . anchor("billing/delete_ot_nadbavka/" . $row->id, "<img src=" . base_url() . "img/delete.png />"); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</fieldset>
<br>
