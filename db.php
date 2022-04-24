<?php
    define('_HOST_NAME', 'localhost');
    define('_DATABASE_USER_NAME', 'root');
    define('_DATABASE_PASSWORD', '');
    define('_DATABASE_NAME', 'semana5y6');

    $mySQLiconn = new mySQLi(
                                _HOST_NAME,
                                _DATABASE_USER_NAME, 
                                _DATABASE_PASSWORD, 
                                _DATABASE_NAME
                            );

    if($mySQLiconn-> errno){
        die("Error: ->".$mySQLiconn->connect_errno);
    }

?>