<?php
require_once "connectDB.php";
$email=$_POST['email'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
//password hashing
$hashpassword=password_hash($password, PASSWORD_DEFAULT);
//date and time of registration
$date = date('Y-m-d H:i:s');
//checking for username in database
$sql2="SELECT * from $table WHERE username='$username'";
$result2=$conn->query($sql2);
if($result2){
    if (mysqli_num_rows($result2)!=0){
      echo '<script>alert("*Username already taken->Please choose another!!!");
    window.location.href="register.html";
    </script>';
    }
  }
  else{
    echo '<script>alert("*Error occured->Please retry!!!");
    window.location.href="register.html";
    </script>';
  }
//checking whether email exists or not in DB.
$sql1="SELECT * from $table WHERE email='$email';";
      $result1=$conn->query($sql1);
      //email checking and registration
      if($result1){
        if (mysqli_num_rows($result1)==0)
        {
            $sql="INSERT INTO $table (email,name,username,password,hashpassword,time) VALUES('$email','$name','$username','$password','$hashpassword','$date')";
$result=$conn->query($sql);
if($result){
    echo '<script>alert("*Registration successful->Please login to continue!!!");
    window.location.href="login.html";
    </script>';
}
else{
    echo '<script>alert("*Registration unsuccessful->Please retry!!!");
  window.location.href="register.html";
  </script>';
}
        }
  
        else{
  echo '<script>alert("*Email already exists->Please login to continue!!!");
  window.location.href="login.html";
  </script>';
        }
      }
      else{
        echo '<script>alert("*Error occured->Please retry!!!");
    window.location.href="register.html";
    </script>';
      }
?>