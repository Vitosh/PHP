<html>
<body>
    <?php
        function compare_two_numbers($number_A, $number_B){
            if ($number_A == $number_B){
                echo "Congratulations! You won!";
                $GLOBALS['b_match'] = true;        
            }
            if ($number_A > $number_B){
                echo "You should go lower.";
            }
            if ($number_A < $number_B){
                echo "You should go higher.";
            }
        }
    ?>
    <?php
        $GLOBALS['b_match'] = false;
        
        if(isset($_GET['number_guess'])){
            setcookie('my_guess',$_GET['number_guess']);
            $_COOKIE['my_guess'] = $_GET['number_guess']; 
        }else{
            unset($_COOKIE['my_guess']);
            setcookie('my_guess', '', time() - 3600, '/'); 
        }
        
        if(isset($_GET['login'])){
            setcookie('my_login',$_GET['login']);
            setcookie('my_rand',rand(1,100));
            $_COOKIE['my_login'] = $_GET['login'];
            $GLOBALS['b_match'] = false;  
        }
        echo "Welcome " . $_COOKIE['my_login'] . "!";
        
        if(isset($_COOKIE['my_guess'])){
            echo "</br>";
            if (is_numeric($_COOKIE['my_guess'])){
                echo "You have chosen " . $_COOKIE['my_guess'] . ".</br>";
            }else {
                echo "Please, give me numeric values! :)" . ".</br>";
            }
                
            
            echo "The random is " . $_COOKIE['my_rand'] . ".</br>";
            compare_two_numbers($_COOKIE['my_guess'], $_COOKIE['my_rand']);
            echo "</br>";
        } else {
            echo "</br>";
            echo "Guessing is not difficult! :)";
        }
        
        if (!$GLOBALS['b_match']){
            echo "</br>";
            echo "Try to guess:";
            echo "</form>";
            echo "<form action='play.php' method='get'>";
            echo "Number: <input type = 'text' name = 'number_guess'>";
            echo "<input type='submit'>";
            echo "</form>";   
        } else {
            echo "<hr />";
            echo "<iframe width='420' height='315' src='https://www.youtube.com/embed/UWLIgjB9gGw' frameborder='0' allowfullscreen></iframe>";
            echo "<hr />";
            echo "<form action='index.php'><br>";
            echo "<input type='submit' value='Dare to play again?'>";
        }
    ?>    
</body>
</html>