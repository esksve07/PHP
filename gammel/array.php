

<?php

$paht='img/';
$images=scandir($paht);

$random_number=rand(0,count($images)-1);

$picked_image=$images[$random_number];

echo "<img width='3400px' height='300' src='img/$picked_image'>";




?>