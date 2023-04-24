<?php
$server="localhost";
$brukernavn="root";
$passord="";
$database="fisk";

$kobling=new mysqli($server, $brukernavn, $passord, $database);

if($kobling->connect_error) {
    die("Noe gikk galt:" .$kobling->connect_error);
} else {
    echo "Tilkoblingen virker<br><br>";
}

$sql="SELECT*FROM fisk";
$resultat=$kobling->query($sql);

while($rad=$resultat->fetch_assoc()){
    $idFisk=$rad['idFisk'];
    $art=$rad['art'];
    $mat=$rad['mat'];
    $farge=$rad['farge'];
    $storrelse=$rad['storrelse'];
    $vanntype=$rad['vanntype'];
    $vekt=$rad['vekt'];

    echo "$idFisk, $art, $mat, $farge, $storrelse, $vanntype, $vekt<br>";

}

?>