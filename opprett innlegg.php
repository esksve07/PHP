
    
<form method="POST">
    Tekst
    <br>
    <textarea name="text" name='tekst_innlegg' cols="40" rows="5"></textarea><br>
    <input class='knapp' type="submit" name='submit' value='Legg ut'>
</form>
<?php
if(isset($_POST["submit"])) {
    include "azure.php";
    $tekst=$_POST["tekst_innlegg"];
    $sql="INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst', '$id_fra_link', now())";

    if($con->query($sql)) {
        echo "Innlegg ble lagt til i databasen";
    } else {
        echo "Feilmelding: $con->error";
    }


}

?>
