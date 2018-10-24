<?php echo anchor("billing/access_journal_index", "Назад"); ?><br>
<h3>Журнал действия пользователя <?php echo $user->name; ?> за <?php echo $action_time; ?></h3>
<table class="border-table">
    <thead>
    <tr>
        <th>№</th>
        <th>Ссылка</th>
        <th>Время действия</th>
        <th>IP адрес</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    $last_hour = -1;
    ?>
    <?php foreach ($actions as $action): ?>
        <?php
        $timestamp = explode(" ", $action->action_time);
        $timestamp = $timestamp[1];
        $timestamp = explode("+", $timestamp);
        $time = $timestamp[0];
        $gmt = $timestamp[1];
        $time = date('H:i:s', strtotime("+{$gmt} hours", strtotime($time)));
        $hour = explode(":", $time);
        $hour = $hour[0];
        ?>
        <?php if ($hour != $last_hour): ?>
            <tr align="center" style="background-color: #4F5155; color: white;">
                <td colspan="4"><?php echo $hour . ":00:00"; ?></td>
            </tr>
            <?php $last_hour = $hour; ?>
        <?php endif; ?>
        <tr>
            <td><?php echo ++$i; ?></td>
            <?php
            if(!empty($action->first_arg)):
                $action->class_method .= "/".$action->first_arg;
            endif;
            if(!empty($action->second_arg)):
                $action->class_method .= "/".$action->second_arg;
            endif;
            ?>
            <td><?php echo $action->class_method; ?></td>
            <td><?php echo $time; ?></td>
            <td><?php echo $action->ip_address; ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>