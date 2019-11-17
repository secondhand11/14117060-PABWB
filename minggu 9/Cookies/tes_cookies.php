<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>

<html>
    <body>
        <?php if(count($_COOKIE) > 0) {
            echo "Cookie Enabled.";
            } else{
                echo "Cookie disabled ."; 
            }
            ?>

            <! karena pada mode incognito penyimpanan riwayat penelusuran tidak dilakukan sehingga
            cookies pun tidak disimpan
            >
    </body>
</html>