<?php
    mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt(3).pem", NULL, NULL);
    define('DB_SERVER', 'it-tech-database.mysql.database.azure.com');
    define('DB_USERNAME', 'rcampos');
    define('DB_PASSWORD', 'Alexa2022.');
    define('DB_NAME', 'it-tech-database');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }
?>
