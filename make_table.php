<html>
<head>
<title>VitoshAcademy Table
</title>
<style>
    .nice_style{
        background-color:yellow;
        color:blue;
    }
    .nicer_style{
        background-color:silver;
        color:pink;
    }
    .header_style{
        color:red;
        font-family:courier;
        font-size:160%;
    }
</style>
</head>
</html>

<?php
    
    function build_beautiful_table($my_result){
        $counter = 0;
        $columns_number = $my_result->field_count;
        $titles = $my_result->fetch_fields();
        
        echo "<table border='50'>";
        echo "<tr class = header_style>";

        foreach($titles as $title_needed){
            echo "<th>" . htmlspecialchars($title_needed->orgname) . "</th>";
        }
        echo "</tr>";
        
        while($value = $my_result->fetch_array()){
            if ($counter % 2 == 1){
                $my_style = " class='nice_style' ";    
            }else{
                $my_style = " class='nicer_style' ";
            }
            $counter += 1;

            echo "<tr $my_style>";
            for ($x = 0; $x< $columns_number; $x++){
                echo "<td>" . htmlspecialchars($value[$x]) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    $mysqli = new mysqli("localhost","root","","todo");
    if($mysqli->connect_error){
        echo "VitoshAcademy Error" . mysqli_connect_error();
        exit();
    }
    
    $my_result = $mysqli -> query("SELECT * FROM todos;");
    build_beautiful_table($my_result);
    $my_result->close();
    $mysqli->close();
?>