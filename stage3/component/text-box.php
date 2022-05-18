<?php
$date = date_create();
$date = date_timestamp_get($date);
?>
<form class="box" action="./" method="get">
    <input type="text" name="msg_content" id="msg_content" placeholder="Envoyer un message dans ">
    <input type="text" name="group" style="display: none;" value="<?= $currentGroup ?>">
    <input type="text" name="time" style="display: none;" value="<?= $date ?>">
    <input type="submit" style="display: none;">
</form>