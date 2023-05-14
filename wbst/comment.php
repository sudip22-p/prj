<?php
session_start();
require_once "connectDB.php";
$table="comment";
$username=$_SESSION['username'];
$email=$_SESSION['email'];
$message=$_POST['comment'];
if($message!=""){
    $sql="INSERT INTO $table (email,username,message) VALUES('$email','$username','$message')";
    $result=$conn->query($sql);
    echo '<script>alert("->Thanks for your comments!!!");
window.location.href="dashboard.php";
</script>';
}
else{
    echo '<script>alert("^Error->Write sth to send!!!");
window.location.href="dashboard.php";
</script>';
}
?>