<?php
    $id = $_REQUEST["id"];
    $cat = $_REQUEST["logtype"];
    $start_at = $_REQUEST["begin_at"];
    $end_at = $_REQUEST["end_at"];
    $content = $_REQUEST["content"];

    echo '{"id":"'.$id.'","cat":"组名'. rand(0,10) .'","status":"success"}';
?>
