<?php
    session_start();
    if(!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')){
        header('location:index.php');
    }
    include_once('User.php');
    $user = new User();

    $sql = "select * from user where id = '".$_SESSION['user']."'";
    $row = $user->details($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Login Authentication OOP PABW</title>
    </head>
    <body>
        <div>
             <h1>PHP Login Authentication OOP PABW</h1>
             <div>
                 <h2>Selamat datang di Dashboard </h2>
                 <h4>user Info: </h4>
                 <p>Name: <?Php echo $row['fname']; ?></p>
                 <p>Username: <?Php echo $row['username']; ?></p>
                 <p>Password: <?Php echo $row['password']; ?></p>
                 <a href="logout.php"><span></span> Logout</a>
             </div>
        </div>
    </body>
</html>
