<?php
    session_start();
    include("function.php");
    if(isset($_SESSION["user_id"])){
        if(isLogininSessionExpired()){
            header('Location:logout.php?session_expired=1');
        }
    }
?>

<html>
    <head>
        <title>User PABW</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <table border="0" cellpadding="10" width="100%">

            <tr>
                <td align= "center"> User Dashboard</td>
            </tr>
            <tr>
                <td>
                    <?php 
                        if(isset($_SESSION["user_name"])){
                            ?>
                            Selamat datang <?php echo $_SESSION["user_name"]; ?>.
                            Klik disini untuk <a href="logout.php" title="Logout">Logout.</a>
                            <?php
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>