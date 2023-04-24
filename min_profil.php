<?php
include "sjekk_login.php";

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Profile</h1>
<?php

include "azure.php";

?>



<?php

include "navbar.php";

include "dropbar.php"
?>



<div class='profile_layout'>
    <div class='info'>
        <?php
            $id_fra_link = $_SESSION['login_id'];
            
            $sql = "SELECT * FROM bruker WHERE idbruker='$id_fra_link' ";
            $resultat = $con->query($sql); # henter ut fra DB
            
            $rad = $resultat->fetch_assoc();
            $idbruker = $rad['idbruker'];  # idbil i brun tekst må samsvare med feltnavn i DB
            $brukernavn = $rad['brukernavn'];
            $fornavn = $rad['fornavn'];
            $etternavn = $rad['etternavn'];
            $bio = $rad['bio'];
            $passord = $rad['passord'];
            $epost = $rad['epost'];
            $tlf = $rad['tlf'];
            $fodselsdato = $rad['fodselsdato'];
            
            echo "<br>Name: $fornavn $etternavn</br>";
            echo "<br>Username: $brukernavn</br>";
            echo "<br>Bio: $bio</br>";
            echo "<br>Birthday: $fodselsdato</br>";



            
            include "opprett innlegg.php";
            
            include "opprett bilde innlegg.php";
        ?>
    </div>

    <div class='bilde_div'>
        <?php
            $sql = "SELECT * FROM media WHERE idbruker='$id_fra_link' ";
            $resultat = $con->query($sql); # henter ut fra DB
    
            while($rad = $resultat->fetch_assoc()) { # loop gjennom alle brukere
                $media_navn = $rad['media_navn'];  
                echo "<img class='bilder'src='img/$media_navn'>";
            }
            
        ?>
    </div>


</div>



</body>
</html>