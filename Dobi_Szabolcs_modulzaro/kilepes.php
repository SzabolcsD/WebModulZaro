<?php
    session_start();
    $_SESSION["be"] = false;
    $fh=$_SESSION["nev"];
    header("location:belepes.php?felhn=$fh");
    exit(0);
?>