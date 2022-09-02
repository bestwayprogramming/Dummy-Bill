<?php
    include 'connection.php';
    $uname=$_POST['uname'];
    $email_id=$_POST['email_id'];
    $date=$_POST['date'];
    $time=$_POST['time'];

    $query = "INSERT INTO `detail` (`uname`, `email_id`, `date`, `time`) 
    VALUES ('$uname', '$email_id', '$date', '$time')";

    if($conn->query($query)===true){
        echo "New record inserted successfully";
    }else{
        echo "Error ".$query.$conn->error;
    }
?>