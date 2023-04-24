<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php

include "azure.php";



$sql = "SELECT * FROM fisk"; 
$resultat = $con->query($sql);

echo "<table id='fisk'>";
echo "<tr>";
echo "<th> art </th>";
echo "<th> mat </th>";
echo "<th> farge </th>";
echo "<th> storrelse </th>";
echo "<th> vanntype </th>";
echo "<th> kg </th>";
echo "</tr>";



while($rad = $resultat->fetch_assoc()) {
    $idfisk = $rad['idFisk'];
    $art = $rad['art'];
    $mat = $rad['mat'];
    $farge = $rad['farge'];
    $storrelse = $rad['storrelse'];
    $vanntype = $rad['vanntype'];
    $kg = $rad['kg'];
    
    echo "<tr>";
    echo "<td><a href='fisk.php?fisk_id=$idfisk'>$art</a></td>";
    echo "<td> $mat </td>";
    echo "<td> $farge </td>";
    echo "<td> $storrelse </td>";
    echo "<td> $vanntype </td>";
    echo "<td> $kg </td>";
    echo "<td> <form method='post' action='slett.php'>";
    echo "<input type='hidden' name='slett_id' value='$idfisk'>";
    echo "<input class='slett' type='submit' value='slett'>";
    echo "</form>";
    echo "</tr>";
    
}

echo "</table>";


?>
<a href="leggtil.php">
    <button>Legg til</button>
</a>

</body>
</html>

