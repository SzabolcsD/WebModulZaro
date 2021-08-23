<?php
    session_start();

    if(!isset($_SESSION["be"]) ||  $_SESSION["be"] == false){
        header("location:belepes.php");
        exit(0);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>Dobi Szabolcs</title>
</head>
<body>
     <main>
        <nav>
            <ul>
                <li><a href="leiras.inc.php">leíras</a></li>
                <li><a href="jelentkezes.inc.php">jelentkezés</a></li>
                <li><a href="partnerek.inc.php">partnerek</a></li>
                <li><a href="kilepes.php">kilépés</a></li>
            </ul>
        </nav>
    </main>
</body>
</html>