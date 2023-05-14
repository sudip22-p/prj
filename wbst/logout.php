<?php
require_once"connectDB.php";
session_start();
session_unset();
session_destroy();
header('location: index.html'); 
?> 