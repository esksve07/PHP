<?php
$random_tall = rand(1,5);

echo "<p> Magic 8 ball </p>";

if($random_tall == 1){
    echo "<p> Nei </p>";
} else if($random_tall == 2){
    echo "<p> Ja </p>";
} else if($random_tall == 3){
    echo "<p> Kanskje </p>";
} else if($random_tall == 4){
    echo "<p> Lite sannsynlig </p>";
} else if($random_tall == 5){
    echo "<p> Veldig sannsynlig </p>";
} else {
    echo "<p> Feil </p>";
}
?>