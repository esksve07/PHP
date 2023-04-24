<?php
 
$sql = "SELECT * FROM innlegg_kommentar WHERE idinnlegg='$idinnlegg' ORDER BY date DESC";
$resultat_kommentar = $con->query($sql); # henter ut fra DB
 
while($kom = $resultat_kommentar->fetch_assoc()) { # loop gjennom alle brukere
    $innlegg_tekst = $kom['tekst']; 
    $dato_opprettet = $kom['date'];
 
    echo "Kommentar: $innlegg_tekst, $dato_opprettet<br>";
}
?>