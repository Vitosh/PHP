<html>
<body>
<?php
   mysql_connect("","root");
   mysql_select_db("Languages");

   $sqlab = "select * from it";
   $sqlab .= " where MoneyMadeWithIt >= " . $_POST["money"];

   $res = mysql_query($sqlab);
   $num = mysql_num_rows($res);
   if ($num==0)
   { 
        echo "Really? Nothing found :)";
   }
   else
   {    
       echo "<table border = 1|0 td align=left>" .
            "<tr><td>#</td><td>Language</td>" .
            "<td>Date</td><td>Level</td><td>Money</td></tr>"; 
           
           while ($dsatz = mysql_fetch_assoc($res))
           {
              echo "<tr>";
              echo "<td>" . $dsatz["Id"] . "</td>" .
                  "<td>" . $dsatz["Name"] . "</td>" .
                  "<td>" . $dsatz["LearnedSince"] . "</td>" .
                  "<td>" . $dsatz["Level"] . "</td>" .
                  "<td>" . $dsatz["MoneyMadeWithIt"] . "</td>";
              echo "</tr>";
           }
        echo "</table";
    }
?>
</body>
</html>
