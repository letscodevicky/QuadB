<?php
session_start();

if (array_key_exists("content" , $_POST)) {

    include("db_conn.php");

    $daata= $_POST['content'];
    $ss= $_SESSION['username'];

$query= "UPDATE `users` SET `Diary` = '$daata' WHERE username = '$ss' ";

if (mysqli_query($conn, $query)) {
    echo "succ"; 
}
else{
    echo " fail" ;
}

}

?>