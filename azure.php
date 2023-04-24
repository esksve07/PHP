<?php
$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($con, 
"mysqleskil.mysql.database.azure.com", "bruno", "Passord123+", "streamit", 3306, MYSQLI_CLIENT_SSL);

if(mysqli_connect_error()) {
    die('Kunne ikke koble til MySql:'.mysqli_connect_error());


}




?>