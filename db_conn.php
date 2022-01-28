<?php

$sname= <!--Server Name-->;

$uname= <!--User Name-->;

$password = <!--Password-->;

$db_name = <!--Database Name-->;

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

// if ($conn) {

//     echo "Success";

// }

?>