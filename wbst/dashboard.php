<?php
session_start();
$username="User";
$username=$_SESSION['username'];
$email=$_SESSION['email'];
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
        background-color: #4f4c42;
        font-family: Arial, Helvetica, sans-serif;
        width:100%;
        display:inline-block;
      }
.navList{
    list-style: none;
    position: relative;
    top: -2em;
    display: inline-block;
    margin-left: 0%;
}
.apart{
    margin-left: 18%;
}
a{
    text-decoration: none;
    color: white;
}
.userPoint{
    width: 75px;
        height: 30px;
        padding-top: 0.5em;
        padding-left: 0.5em;
        padding-right: 0.5em;
        color: white;
        background-color: red;
        border: none;
        border-radius: 5px;
}
#sbmt{
        width: 75px;
        height: 30px;
        padding-top: 0.5em;
        padding-left: 0.5em;
        padding-right: 0.5em;
        color: white;
        background-color: green;
        border: none;
        border-radius: 5px;
        position:relative;
        left:40%;
}
.userPoint:hover {
        background-color: darkred;
      }
.rem4:hover {
        background-color: gray;
      }
.rem4{
        padding: 1em;
        border-radius: 5px;
        height: 1em;
      }
    #wrapper{
        height: 9.8em;
        margin-left: -0.5em;
        margin-right: -0.5em;
        margin-top: -0.5em;
        padding-top: 2em;
        background-color: #282424;
        box-shadow: 9px 9px 13px #141510;
        min-width:20em;
    }
    #message{
        height: 22em;
        position: relative;
        left: 0px;
        right: 0px;
        top: 0em;
        margin: auto;
        width: 32em;
    }
    .makeCenter{
        position: relative;
        left: 0px;
        right: 0px;
        margin: auto;
    }
    textarea::placeholder{
        font-size:0.5em;
        font-family:cursive;
        color:grey;
    }
    #sbmt:hover{
        background:darkgreen;
    }
    .whiteText{
        color: white;
    }
    #just-hello{
        font-size: 3em;
    }
    #welcome,#connecting{
        font-size: 1.5em;
    }
    .image{
        position: relative;
        top: 1.5em;
        border-radius: 50%;
    }
    .greenText{
        color:#69cd69;
        font-family:cursive;
        font-size:2em;
    }
    #commentBox{
        height:15%;
        width: 100%;
        font-family:cursive;
        font-size:1.5em;
        background:light;
    }
    #commentBox:hover{
        background:white;
    }
    form{
       position:relative;
       bottom:10em;
    }
    @media only screen and (max-width: 600px) {
        .userPoint{
        width: 4em;
        height: 2em;
        padding-top: 0.5em;
        padding-left: 0.5em;
        padding-right: 0.5em;
        color: white;
        background-color: red;
        border: none;
        border-radius: 5px;
}
#wrapper{
        height: 5em;
        margin-left: -2em;
        margin-top: -2em;
        padding-top: 1em;
        background-color: #282424;
        box-shadow: 9px 9px 13px #141510;
        min-width:20em;
        font-size:7px;
    }
    #message{
        height: 18em;
        position: relative;
        left: 0px;
        right: 0px;
        top: 0em;
        margin: auto;
        width: 16em;
    }
    #just-hello{
        font-size: 2em;
    }
    #welcome,#connecting{
        font-size: 1em;
    }
    .image{
        position: relative;
        height:3em;
        top: 1em;
        margin-left:-25px;
        padding-left:0px;
        border-radius: 50%;
    }
    .greenText{
        color:#69cd69;
        font-family:cursive;
        font-size:2em;
    }
    #commentBox{
        height:15%;
        width: 80%%;
        font-family:cursive;
        font-size:0.75em;
        background:light;
        position:relative;
        left:-0.5em;
    }
    form{
       position:relative;
       bottom:5em;
    }
    textarea::placeholder{
        font-size:3em;
        font-family:cursive;
        color:grey;
    }
    }
    </style>
</head>
<body>
    <div id="wrapper">
        <ul>
            <li class="navList"><a href="#"><img class="image
                " src="./Assets/Images/navbarLogo.png" alt="Logo" height="50em"></li>
            <li class="navList leftPaddingMore"><a href="#"><h3 class="rem4">Home</h3></a></li>
            <li class="navList"><a href="#"><h3 class="rem4">Services</h3></a></li>
            <li class="navList"><a href="#"><h3 class="rem4">Team</h3></a></li>
            <li class="navList"><a href="#"><h3 class="rem4">Contact</h3></a></li>
            <li class="navList apart"><a href="./logout.php"><h3 class="userPoint logout">LOGOUT</h3></a></li>
        </ul>
    </div>
    <div id="message">
        <h1 class="whiteText" id="just-hello">Hello
             <?php
        echo $username;
                ?>
        !!!!</h1>
        <h2 class="whiteText" id="welcome">Welcome back!</h2>
        <h3 class="greenText"  id="connecting ">Feel free to comment anything</h3>
        
    </div>
       <form action="comment.php" method="post">
        <textarea id="commentBox" placeholder="write your message here" name="comment"></textarea required><br>
        <input type="submit" value="Send" id="sbmt" >
      </form>
</body>
</html>