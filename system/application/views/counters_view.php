<?php
function datetostring($date)
{
    $d = explode("-", $date);
    return $d['2'] . '/' . $d['1'] . '/' . $d['0'];
}

?>
<?php
echo anchor(base_url() . "/billing/firm/" . $point_data->firm_id, "Назад к фирме") . "<br>";
if ($this->session->flashdata('is_deleted') == -1)
    echo "<h3>Счетчик успешно удален</h3>";
if ($this->session->flashdata('is_deleted') == 1)
    echo "<h3>Счетчик не удален в виду наличия на нем показаний за прошлые периоды</h3>";

?>
<h3><b>Точка учета <?php echo $point_data->name; ?></b></h3>

<table>
    <tr>
        <td><b>Адрес</b></td>
        <td><?php echo $point_data->address; ?></td>
        <td></td>
    </tr>
    <tr>
        <td><b>Учет</b></td>
        <td><?php echo($point_data->phase == 1 ? "однофазный" : "трехфазный"); ?></td>
        <td></td>
    </tr>
<!--    --><?php //if (!empty($last_ins_check)): ?>
<!--        <tr>-->
<!--            <td><b>Последняя инст.проверка</b></td>-->
<!--            <td>Акт №--><?php //echo $last_ins_check->act_number; ?><!-- от --><?php //echo $last_ins_check->data; ?>
<!--            </td>-->
<!--            <td>-->
<!--                --><?php //echo form_open("billing/del_ins_check"); ?>
<!--                <input type="hidden" name="id" value="--><?php //echo $last_ins_check->id; ?><!--">-->
<!--                <input type="hidden" name="bill_id" value="--><?php //echo $point_data->id; ?><!--">-->
<!--                <input type="submit" value="X">-->
<!--                --><?php //echo form_close(); ?>
<!--            </td>-->
<!--        </tr>-->
<!--    --><?php //endif; ?>
<!--    <tr>-->
<!--        <td colspan="2"><b>--><?php //echo anchor("billing/transformator/" . $point_data->id, "Трансформатор"); ?><!--</b></td>-->
<!--        <td></td>-->
<!--    </tr>-->
</table>

<br>
<hr>
<br>
<!--    <b>Инструментальная проверка</b><br><br>-->
<!--    --><?php //echo form_open("billing/add_ins_check"); ?>
<!--    <input type="hidden" name="bill_id" value="--><?php //echo $point_data->id; ?><!--">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <td>№ акта</td>-->
<!--            <td><input type="text" name="act_number"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Дата акта</td>-->
<!--            <td><input type="date" name="data"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Примечание</td>-->
<!--            <td><input type="text" name="notice"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td></td>-->
<!--            <td><input type="submit" value="Добавить"></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--    --><?php //echo form_close(); ?>
<br>
<hr>
<br>

<fieldset>
    <legend><b>Установленные счетчики на точке учета:</b></legend>
    <table class="border-table">
        <thead>
        <tr>
            <th>Тип счетчика</th>
            <th>Гос номер</th>
            <th>Дата гос проверки</th>
            <th>Дата снятия</th>
<!--            <th>Номер пломбы</th>-->
<!--            <th>Пломба установлена</th>-->
<!--            <th>Пломба снята</th>-->
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($query->result() as $row): ?>
            <?php if ($row->data_gos_proverki == "") $gprov = " "; else $gprov = $row->data_gos_proverki; ?>
            <?php if ($row->data_finish == "") $edate = " "; else $edate = $row->data_finish; ?>
            <tr>
                <td><?php echo anchor("billing/counter/" . $row->id, $row->type); ?> </td>
                <td><?php echo anchor("billing/counter/" . $row->id, $row->gos_nomer); ?></td>
                <td class="td-number"><?php echo anchor("billing/counter/" . $row->id, $gprov); ?></td>
                <td class="td-number"><?php echo anchor("billing/counter/" . $row->id, $edate); ?></td>
<!--                --><?php
//                if (is_null($row->plomba_value)) {
//                    $row->plomba_value = " ";
//                    $row->plomba_data = " ";
//                    $plomba_x = "";
//                } else {
//                    $plomba_x = anchor("billing/delete_counter_plomba/" . $row->plomba_id, "X");
//                }
//                if (is_null($row->plomba_data_end)) {
//                    $row->plomba_data_end = " ";
//                }
//                ?>
<!--                <td>-->
<!--                    --><?php //echo anchor("billing/counter/" . $row->id, $row->plomba_value); ?>
<!--                    --><?php //echo $plomba_x; ?>
<!--                </td>-->
<!--                <td>--><?php //echo anchor("billing/counter/" . $row->id, $row->plomba_data); ?><!--</td>-->
<!--                <td>--><?php //echo anchor("billing/counter/" . $row->id, $row->plomba_data_end); ?><!--</td>-->
                <td><?php echo anchor("billing/delete_counter/" . $row->id, "Удалить"); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</fieldset>

<br>
<fieldset>
    <legend>Снятие счетчика</legend>
    <br>
    <?php if ($snyat) {
        echo form_open("billing/break_counter");
        echo "<input type=hidden name=point_id value=" . $point_data->id . " />";
        echo "День<input name=day size=5> месяц <input name=month size=5> год <input name=year size=10> ";
        echo "<input type=submit value=\"снять счетчик\">";
        echo "</form>";
    }
    ?>
    <br>
</fieldset>


<br>
<fieldset>
    <legend>Установка пломбы</legend>
    <?php echo form_open("billing/add_counter_plomba"); ?>
    <table>
        <tbody>
        <tr>
            <td>Номер пломбы</td>
            <td><input type="text" name="value"></td>
        </tr>
        <tr>
            <td>Дата установки</td>
            <td><input type="date" name="data"></td>
        </tr>
        <tr>
            <td>Примечание</td>
            <td><input type="text" name="notice"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
        </tbody>
    </table>
    <input type="hidden" name="point_id" value="<?php echo $point_data->id; ?>">
    <?php echo form_close(); ?>
</fieldset>
<br>
<fieldset>
    <legend>Снятие пломбы</legend>
    <?php echo form_open("billing/close_counter_plomba"); ?>
    <table>
        <tr>
            <td>Дата снятия</td>
            <td><input type="date" name="data_end"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
    <input type="hidden" name="point_id" value="<?php echo $point_data->id; ?>">
    <?php echo form_close(); ?>
</fieldset>
<br>
<hr/>