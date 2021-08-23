<?php
    session_start();
    if(isset($_POST["mehet"])){
        $nev = $_POST["nev"];
        $jsz = $_POST["jsz"];
        if($nev == "admin" && $jsz == "admin"){
            $_SESSION["be"] = true;
            $_SESSION["nev"]=$nev;
        }else{
            $_SESSION["be"] = false;
        }
    }
    
    if(isset($_SESSION["be"]) &&  $_SESSION["be"] == true){
        header("location:index.php");
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
    <title>Belepes</title>
</head>

<body>
    <?php
    $nev="";
        if(isset($_GET["felhn"])){
            $nev=$_GET["felhn"];
        }
    ?>
    <main>
        <form action="" method="POST">
            <p>
                <label for="nev">Név:</label>
                <input type="text" name="nev" id="nev" require value="<?php echo $nev;?>">
            </p>

            <p>
                <label for="jsz">Jelszo:</label>
                <input type="password" name="jsz" id="jsz" required>
            </p>

            <p>
                <input type="submit" name="mehet">
            </p>
        </form>
    </main>
</body>
</html>