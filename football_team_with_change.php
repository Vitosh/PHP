<html>
<body>

<?
$football_team = simplexml_load_file("football_team.xml");

echo "<h2>Facts for $football_team->name</h2><hr>";
echo "Name: $football_team->name<br />";
echo "From: $football_team->city<br />";
echo "Nickname: $football_team->nickname<br />";
echo "<hr>";

$football_team->city = "Sofia City";
file_put_contents("football_team.xml", $football_team->asXML());
$football_team = simplexml_load_file("football_team.xml");
echo "After change => From: $football_team->city<br />";
echo "<hr>";

echo "Titles and cups (2015) :<br />";
echo "The team is " . $football_team->history->champion. " times champion of Bulgaria.<br />";
echo "The team has won the cup " . $football_team->history->cup . " times.<br />";
echo "The team is founded in: $football_team->founded";
?>
</body>
</html>
