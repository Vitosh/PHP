<?
    $session_name = "vitoshacademy.com";
    session_start();
    
    if(isset($_SESSION[$session_name]))
    {
        $_SESSION[$session_name] ++;
    }
    else 
    {
        $_SESSION[$session_name]=1;
    }

?>

<html>
<body>
<h3>VitoshAcademy.Com</h3>
<?
    
    
    if($_SESSION[$session_name]==1)
        echo "Welcome for the first time in vitoshacademy.com";
    else
        echo "You were already " . $_SESSION[$session_name] . " times here!";
?>
</body>
</html>