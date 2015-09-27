<?php
    include 'db_connection.php';
        
    function getTodoItems($user_id){
        $SQL = "SELECT * FROM todos WHERE user_id = ". $user_id . "";
        $result = mysql_query($SQL);
        echo "<form action='#' method = 'POST'>";
        while($data = mysql_fetch_assoc($result))
        {   
            echo "<table>";
            echo "<tr>";
            echo "<td><input type='checkbox' name='check_list[]' value='". $data["id"] ."'></td>";
            echo "<td>" . $data["todo_item"] . "</td>";
            echo "</tr>";
            echo "</table>";
        }
        echo "</hr>";
        echo "</form>";
    }
    
    function getCleared(){
        echo "Please, select a user with a todo list :)";
    }
    

    if($_GET["choice"]){
        echo getTodoItems($_GET["choice"]);
    }else{
        echo getCleared();   
    }
 ?>