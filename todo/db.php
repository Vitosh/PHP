<?php
    include 'db_connection.php';
    
    function createUser($username, $password){
        $SQL = "INSERT INTO users (username, passwordHash) VALUES ('" . $username . "','" . $password . "')";
        $result = mysql_query($SQL);        
    }
    
    function isUserValid($username,$password){
        $SQL = "SELECT * FROM users WHERE username = '". $username . "' AND passwordHash = '" . $password . "'";
        $result = mysql_query($SQL);
        if ($result == false)
        {
            die(mysql_error());
        }
        
        $count=mysql_num_rows($result);
        if($count == 1){
            setcookie('login',$username);
            setcookie('islogged',true);
            $dsatz = mysql_fetch_assoc($result);
            setcookie('my_id', $dsatz['id']);
            header("location:list.php");
        } else {
            unset($_COOKIE['login']);
            setcookie('login', false);
            setcookie('islogged',false);
            setcookie('id',false);
            echo "Wrong Username or Password, try again!";
        }
        
    }
    
    function getTodoItems($user_id){
        $SQL = "SELECT * FROM todos WHERE user_id = ". $user_id . "";
        $result = mysql_query($SQL);
        echo "<form action='#' method = 'POST'>";
        while($dsatz = mysql_fetch_assoc($result))
        {   
            echo "<table>";
            echo "<tr>";
            echo "<td><input type='checkbox' name='check_list[]' value='". $dsatz["id"] ."'></td>";
            echo "<td>" . $dsatz["todo_item"] . "</td>";
            echo "</tr>";
            echo "</table>";
        }
        echo "</hr>";
        echo "<input type='submit' value='delete'/>";
        echo "</form>";
    }

    function addTodoItem($user_id, $todo_text){
        $SQL = "INSERT INTO todos(user_id, todo_item) VALUES (".$user_id.",'".$todo_text."')";
        $result = mysql_query($SQL);        
    }
    
    function deleteTodoItem($user_id, $todo_id){
        $SQL = "DELETE FROM todos WHERE id = ".$todo_id." AND user_id = ".$user_id."";
        $result = mysql_query($SQL);
    }
#var_dump(password_hash("123",PASSWORD_DEFAULT));
?>