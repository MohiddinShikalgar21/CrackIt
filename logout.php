<?php
    session_start();
    if(isset($_SESSION['login_user2']))
    {
        unset($_SESSION['login_user2']);
    }
    header("location:index.php")
?>