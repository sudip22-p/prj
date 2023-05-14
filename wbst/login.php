<?php
require_once"connectDB.php";
session_start();
  $email_username = $_POST['email'];
  $password = $_POST['password'];
  //checking whether email exists or not in DB.
$user_check="SELECT * from $table WHERE email='$email_username' OR username='$email_username';";
      $result=$conn->query($user_check);
if($result){
  if (mysqli_num_rows($result)==0)
  {
echo '<script>alert("*Email or Username not registered->Register first!!!");
    window.location.href="register.html";
    </script>';
  }
  else{
    // Taking user data from database
      $user = mysqli_fetch_assoc($result);
      //verifying password
      if ($password===$user['password']) {
       // Storing the user data in a session variable
       $_SESSION['email'] = $user['email'];
       $_SESSION['username'] = $user['username'];
       // Opening dashboard after matching
       header("Location: dashboard.php");
       exit();
     }
     else{
      //if not matched
           echo '<script>alert("*Incorrect password->Please retry!!!");
    window.location.href="login.html";
    </script>';
     }
 
  }    
}
else{
  echo '<script>alert("*Error occured->Please retry!!!");
    window.location.href="login.html";
    </script>';
}
?>