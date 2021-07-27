<?php

function time_ago($timestamp) {
    $time_ago=strtotime($timestamp);
    $current_Time=time();
    echo $current_Time;
    $time_diff=$current_Time - $time_ago;
    $seconds=$time_diff;
    // echo $seconds;
    $minutes=round($seconds / 60);
    $hours=round($seconds / 3600);
    $days=round($seconds / 86400);
    if($seconds <= 60) {
        return "Just Now";
    } elseif ($minutes <= 60) {
        if ($minutes == 1) {
            return "1 minute Ago";
        } else {
            return "$minutes minutes ago"; 
        }
    }
}
date_default_timezone_set("Africa/Lagos");
echo time_ago('2020-11-20 04:c :00');

?>
