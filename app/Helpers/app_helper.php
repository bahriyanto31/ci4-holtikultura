<?php

function notif_toast($notif)
{
    echo "<script>";
    echo "notif_toast(" . $notif['sts'] . ",'" . $notif['titl'] . "','" . $notif['msg'] . "')";
    echo "</script>";
}
