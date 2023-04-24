<?php

session_start();

session_unset();
session_destroy();

header("Refresh:1; url=logg_inn.php", true, 303);

?>