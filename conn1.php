<?php

// remote database connection 

// $server = 'remotemysql.com';
// $db = '3wDpTYY5gj';
// $user = '3wDpTYY5gj';
// $password = 'SPPganF7LG';
// $charset = 'utf8mb4';

// development connection 

$server = "localhost";
$db = "org";
$user = "root";
$password = "";

$charset = 'utf8mb4';

$con = mysqli_connect($server, $user, $password, $db);

if ($con) {
?>

    <script>
        alert("Connected");
    </script>
<?php
} else {
?>

    <script>
        alert("Not Connected");
    </script>
<?php
}
?>