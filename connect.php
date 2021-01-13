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
// function connect_to_ftp()
// {
//     $ftp_host = "103.76.228.38";
//     $ftp_user = "admin@kynadental.com";
//     $ftp_pass = "Kanpur@2020";
//     $ftp_connection = ftp_connect($ftp_host) or die("Couldn't connect to server :(");
//     ftp_login($ftp_connection, $ftp_user, $ftp_pass) or die("Couldn't connect to server :(");

//     ftp_pasv($ftp_connection, true);
//     return $ftp_connection;
// }
// function getdbname()
// {

//     return "ubid2dcv_dental";
// }
// function gettablename($value)
// {
//     if ($value === "patient")
//         return "patients_raw";
//     else if ($value === "p_insurance")
//         return "patient_raw_insurance";
//     else if ($value === "patient_f")
//         return "patients";
// }



// // Site Key
// // 6LeXXAQaAAAAAN0SfDqSJS3DT01kL8z8rdCPEeXq
// // Secret Key
// // 6LeXXAQaAAAAAOp8eH7YKR5_pdp3LHbNo19uN38w
