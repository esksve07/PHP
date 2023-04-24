<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include "azure.php";

$id_fra_link=$_GET['fisk_id'];

$sql = "SELECT * FROM fisk WHERE idFisk='$id_fra_link'";

$resultat = $con->query($sql);

$rad = $resultat->fetch_assoc();

    $idfisk = $rad['idFisk'];
    $art = $rad['art'];
    $mat = $rad['mat'];
    $farge = $rad['farge'];
    $storrelse = $rad['storrelse'];
    $vanntype = $rad['vanntype'];
    $kg = $rad['kg'];

echo "$art, $mat, $farge, $storrelse, $vanntype, $kg"

?>

</body>
</html>