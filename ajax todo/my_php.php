<?php
    //turn off notices and errors (do not do this in production! ;)
    error_reporting(0);
    if($_GET['query_name']=='todo_list'){
        $query = "SELECT id, user_id, todo_item FROM TODOS;";
        $result = database_connection($query);
        
        $arr_result = array();
        
        //Add some data here, in order to make some use of the AJAX
        $string_date_formatted = date("Y/m/d");
        
        addTodoItem(7,$string_date_formatted);
        
        while($line = mysql_fetch_array($result, MYSQL_ASSOC)){
            array_push($arr_result, array('some_ID'=>$line['id'], 
                                          'some_userid'=>$line['user_id'],
                                          'some_text'=>$line['todo_item']));
        }
        echo json_encode(array("todo_result"=>$arr_result));
        exit;
    }
    
    function addTodoItem($user_id, $todo_text){
        $query = "INSERT INTO todos(user_id, todo_item) VALUES (".$user_id.",'".$todo_text."')";
        $result = database_connection($query);        
    }

    function database_connection($query){
        mysql_connect('localhost','root','') 
            OR die(write_error("No connection possible."));
        mysql_select_db('todo');
        return mysql_query($query);
    }
    
    function status($message,$status){
        die(json_encode(array('status'=>$status,'message'=>$message)));
    }
?>

    