<?php echo form_open("billing/counter_to_check"); ?>
<fieldset>
    <legend>Список счетчиков, </legend>
    <label for="">Гос.проверка проведена более</label>
    <input type="number" name="year_diff">
    <label for="">лет назад</label>
    <input type="submit" value="Открыть">
</fieldset>
<?php echo form_close(); ?>
