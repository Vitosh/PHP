<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<div id="myList"></div>
		<script type="text/javascript">
		var names = ['vitosh','academy','dot','com'];
		var ul = document.createElement('ul');
		document.getElementById('myList').appendChild(ul);

		names.forEach(function(name){
			var li = document.createElement('li');
			ul.appendChild(li);
			li.innerHTML += name;
		});
		</script>
	</body>
</html>
