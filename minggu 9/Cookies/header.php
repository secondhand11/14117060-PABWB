<?php
    session_start();
    include("function");
    $message="";
    if( count($_POST)>0){
        if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin"){
            $_SESSION["user_id"] = 1001;
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION['logged_time'] = time();
        } else{
            $message = "username atau password salah";
        }
    }

    if(isset($_SESSION["user_id"])){
        if(!isLoginSessionExpired()){
            header("Location:user_dashboard.php");
        } else{
            header("Location:logout.php?session_expired=1");
        }
    }

    if(isset($_GET["session_expired"])) {
        $message = "sesi login telah berakhir . silahkan login kembali";
    }
?>