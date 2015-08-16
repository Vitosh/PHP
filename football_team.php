<html>
<body>
<?php
$football_team = simplexml_load_file("football_team.xml");

echo "<h2>Facts for $football_team->name</h2><hr>";
echo "Name: $football_team->name<br />";
echo "From: $football_team->city<br />";
echo "Nickname: $football_team->nickname<br />";
echo "<hr>";
echo "Titles and cups (2015) :<br />";
echo "The team is " . $football_team->history->champion. " times champion of Bulgaria.<br />";
echo "The team has won the cup " . $football_team->history->cup . " times.<br />";
echo "The team is founded in: $football_team->founded";
?>
</body>
</html>
