<?php
function connect()
{

    $password = "Kanpur@2020";
    $host = "103.76.228.38";
    $port = 3306;
    $socket = "/var/lib/mysql/mysql.sock";
    $user = "ubid2dcv_harsh";

    $dbname = "ubid2dcv_hospital";

    $connection = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die('Could not connect to the database server' . mysqli_connect_error());
    return $connection;
}
?>