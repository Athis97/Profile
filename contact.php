<?php
include "db_conn.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `contact_me` (`name`,`email`,`phone`,`message`) VALUES ('$name','$email','$phone','$message')";
    $result = mysqli_query($conn,$sql);
    if($result == TRUE) {
         echo "<script>window.open('../success.html');window.close();</script>";
    } else {
      echo "<script>window.open('../failed.html');window.close();</script>";
    }
    $conn->close();
}
?>