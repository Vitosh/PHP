<?php

    include 'db_connection.php';
    include 'db.php';
    
    if (!$_COOKIE['islogged']){
        header("location:login.php");
    }
    
    echo "Welcome," . $_COOKIE['login'] . "<br/>";
    echo "Below you may find your TODO list :)";
    echo "<br/><br/>To Do list:<br/><br/>";
    getTodoItems($_COOKIE['my_id']);
    

    if(isset($_POST['submit_description'])){
        addTodoItem($_COOKIE['my_id'],$_POST['description']);
        header("Refresh:0");        
    }
    
    if(isset($_POST['check_list'])){
        foreach($_POST['check_list'] as $selected){
            deleteTodoItem($_COOKIE['my_id'], $selected);
        }
        header("Refresh:0");
    }
?>
<html>
<body>
    <hr />
    <form method="post">
        <table>
            <tr><td>Description:</td><td><input type="text" name="description" /></td></tr>
                <input type="submit" name="submit_description" value="Add"/>
            </td></tr>
        </table>
    </form>
    <hr />
</body>
</html>

    