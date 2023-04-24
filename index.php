<?php
session_start();
if(!isset($_SESSION['login_id'])){
    header("Refresh:1; url=logg_inn.php", true, 303);
    die();
} 


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    

<?php
include "azure.php";

$sql="SELECT idbruker, brukernavn FROM bruker";
$resultat=$con->query($sql);

while($rad=$resultat->fetch_assoc()) {
    $idbruker=$rad['idbruker'];
    $brukernavn=$rad['brukernavn'];

    echo "<br><a href='profile.php?bruker_id=$idbruker'>$brukernavn</a></br>";
}

include "navbar.php";
include "dropbar.php"


?>




</body>
</html>