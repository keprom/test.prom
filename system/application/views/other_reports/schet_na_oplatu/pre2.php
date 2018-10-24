<fieldset>
    <legend>Счет на оплату (СФ)</legend>
    <form action="<?php echo site_url() . "/billing/schet_na_oplatu/" . $firm_id; ?>" method="post">
        <table>
            <tr>
                <td><label for="">Номер </label></td>
                <td><input name="schet_nakl" type="text" value="<?php echo $sf_date->id; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Дата выдачи</label></td>
                <td><input name="data_nakl" type="text" value="<?php echo $sf_date->date; ?>"></td>
            </tr>
            <tr>
                <td>Подпись</td>
                <td>
                    <select name="signer" id="">
                        <option value="1">Ташкенова С.С.</option>
                        <option value="2">Ламнова Л.П.</option>
                        <option value="3">Директор/гл.бухгалтер</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="hidden" value="<?php echo $firm_id; ?>" name="firm_id">
        <input type="hidden" value="<?php echo $period_id; ?>" name="period_id">
        <input type="submit" value="Открыть">
    </form>
</fieldset>
