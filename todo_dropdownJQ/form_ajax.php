<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
        <script>
            $(function(){
                $('#users').change(function(){
                        $.get(
                        "data.php",
                        {choice:$(this).val()},
                        function(data){
                            $('#my_field').html(data);
                        });
                });
            });
        </script>
        <style>
        #my_field{
            font-family:verdana;
            background-color:yellow;
        }
        body{
           color:RGB(0,189,255);    
        }
        label{
            color:blue;
        }
        </style>
    </head>
    <body>
        <form>
            <p>
                <label for="users">Lists of users</label>
                <select id="users" name="users">
                    <option value="">Choose</option>
                    <?php
                    include "db_connection.php";
                    $SQL = "SELECT DISTINCT(user_id) FROM todos";
                    $my_result = mysql_query($SQL);
                    $counter = 1;
                    while ($data = mysql_fetch_assoc($my_result))
                    {
                        echo "<option value=$data[user_id]>User $counter</option>";
                        $counter++;
                    }                
                    ?>
                </select>
            </p>
        </form>
        <div id="my_field"></div>
    </body>
</html>