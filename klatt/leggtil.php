

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form method="POST">
    Art
    <br><input class="boks" type="text" name="art"><br>
    Mat
    <br><input class="boks" type="text" name="mat"><br>
    Farge
    <br><input class="boks" type="text" name="farge"><br>
    Størrelse
    <br><input class="boks" type="number" name="storrelse"><br>
    Vanntype
    <br><input class="boks" type="text" name="vanntype"><br>
    Kg
    <br><input class="boks" type="number" name="kg"><br>

    <br><input class="knapp" type="submit" name="leggtil" value='Send inn'>
</form>
 

<?php

include "azure.php";

if(isset($_POST["leggtil"])) {
    $art = $_POST["art"];
    $mat = $_POST["mat"];
    $farge = $_POST["farge"];
    $storrelse = $_POST["storrelse"];
    $vanntype = $_POST["vanntype"];
    $kg = $_POST["kg"];


    $sql = "INSERT INTO fisk (art, mat, farge, storrelse, vanntype, kg) VALUES ('$art', '$mat', '$farge', '$storrelse', '$vanntype', '$kg')";

    if($con->query($sql)) {
        echo "Fisk med navn $art";

    }

}

?>
</body>
</html>