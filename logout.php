<?php
    session_start();
    //hancurkan sesinya wkkwkw
    session_destroy();
    //redirect dong balik ke hal awal
    header("location:index.php");
?>