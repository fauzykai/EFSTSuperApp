<?php
function tambah($a, $b) {
    return $a + $b;
}

function gettime()
{
    date_default_timezone_set('Asia/Jakarta');
    echo "time=" . date("Y-m-d H:i:s");
    $dateval=date("Y-m-d H:i:s");
    $GLOBALS['dateval'] = $dateval;
    //echo $dateval;
}
?>
