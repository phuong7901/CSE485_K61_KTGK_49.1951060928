<?php
    $conn = mysqli_connect('localhost', 'root', '', 'qlxe' );
    if(!$conn){
        header('location: error.php');
    }
?>