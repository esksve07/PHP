<?php

$år = date("Y");
$måned = date("m");
$dag = date("d");
$fødselsår = 2005;


if ($måned == 1) {
    echo "Det er januar<br>";
} else if($måned == 2){    
    echo "Det er Februar<br>";
} else if($måned == 3){
    echo "Det er Mars<br>";
}
else if($måned == 4){
    echo "Det er April<br>";
}
else if($måned == 5){
    echo "Det er Mai<br>";
}
else if($måned == 6){
    echo "Det er Juni<br>";
}
else if($måned == 7){
    echo "Det er Juli<br>";
}
else if($måned == 8){
    echo "Det er August<br>";
}
else if($måned == 9){
    echo "Det er September<br>";
}
else if($måned == 10){
    echo "Det er Oktober<br>";
}
else if($måned == 11){
    echo "Det er November<br>";
}
else if($måned == 12){
    echo "Det er Desember<br>";
}
else {
    echo "Feil<br>";
}


if ($år - $fødselsår += 18) {
    echo "Du er 18 år";
}
else if ($år - $fødselsår -= 18) {
    echo "Du er ikke 18 år";
}
else {
    echo "Feil";
}

?>