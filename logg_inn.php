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
<h1>Logg Inn</h1>

<form method="POST">
    <br><input type="text" name="brukernavn" placeholder="Username"><br>

    <br><input type="password" name="passord" placeholder="Password"><br>

    <br><input class="knapp" type="submit" name="logg_inn" value="Logg inn"><br>
    <br>
    
</form>
<a href="new_user.php">
    <button class='make_ac'>Make an account?</button>
</a>
</div>

<?php
    if(isset($_POST['logg_inn'])) {
        include "azure.php";

        echo "Submit login";
        $brukernavn=$_POST['brukernavn'];
        $passord_skjema=$_POST['passord'];


        $sql = "SELECT brukernavn, passord, idbruker, fornavn, etternavn FROM bruker WHERE brukernavn='$brukernavn'";
        $resultat = $con->query($sql);

        $rad=$resultat->fetch_assoc();

        if ($rad['passord']==$passord_skjema) {
            echo "Riktig";

            session_start();
            $_SESSION['login_id'] = $rad['idbruker'];
            $_SESSION['fornavn'] = $rad['fornavn'];
            $_SESSION['etternavn'] = $rad['etternavn'];

            header("Refresh:1; url=index.php", true, 303);
        } else {
            echo "Feil";

        }
    }


?>


</body>
</html>