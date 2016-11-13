<form method="post">
    <input type ="text" name ="username"/>
    <input type ="password" name ="password"/>
    <input type ="submit" value ="Login" name ="login"/>
</form>

<?php
$db = new PDO("mysql:host=localhost; dbname=game",
    "root",
    ""
);
if(!empty($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $statement = $db->query("
    SELECT 
    * 
    FROM players 
    WHERE username = '$username' AND password = '$password';
    ");
    $logged_player = $statement->fetch(PDO::FETCH_ASSOC);
    if ($logged_player!==false){
        echo "<h1>logged in</h1>";
        echo $logged_player['username'];
    }else{
        echo "<h1>Wrong username or password</h1>";
    }
}