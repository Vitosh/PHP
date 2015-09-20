<html>
    <body>
        <?
            unset($_COOKIE['my_login']);
            setcookie('my_login', '', time() - 3600, '/'); 
        ?>        
        <form action="play.php" method="GET"><br>
            Name: <input type="text" name="login"><br><hr />
        <input type="submit" value="Start Game">
        </form>
    </body>
</html>