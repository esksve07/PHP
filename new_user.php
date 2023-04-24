<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class='boks'>
<form method="POST">
    Brukernavn
    <br><input type="text" name="brukernavn"><br>
    First name
    <br><input type="text" name="fornavn"><br>
    Surname
    <br><input type="text" name="etternavn"><br>
    Email
    <br><input type="text" name="epost"><br>
    Tlf
    <br><input type="number" max="99999999"  name="tlf"><br>
    Birthday
    <br><input type="date" name="fodselsdato"><br>
    Password
    <br><input type="password" name="passord"><br>

    <br><input class="knapp" type="submit" name="opprett_profil" value="Opprett profil">
</form>
</div> 

<?php
include "azure.php";
 
if(isset($_POST["opprett_profil"])) {
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $fodselsdato = $_POST["fodselsdato"];
    $epost = $_POST["epost"];
    $passord = $_POST["passord"];
    $tlf = $_POST["tlf"];

 
    $sql = "INSERT INTO bruker (brukernavn, fornavn, etternavn, fodselsdato, epost, passord, tlf) VALUES ('$brukernavn', '$fornavn', '$etternavn', '$fodselsdato', '$epost', '$passord', '$tlf')" ;
    
    if($con->query($sql)) {
        echo "Bruker ble opprettet";
    }
 
}

?>

</body>
</html>