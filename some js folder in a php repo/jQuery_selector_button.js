<html>
	<head>
		<title>VitoshAcademy</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		window.onload = function (){
			var my_button = document.getElementById('my_id_button');
			my_button.onclick = function(){
				document.getElementById('my_text').style.color = 'green';
			}
		}
		
		$(document).ready(function(){
			$('#my_id_button_2').click(function(){
				$('#my_text').css('color','black');
			});
		});
		</script>
	<head>
	<body>
		<p id="my_text">Here Comes the boom!</p>
		<button onclick="$('#my_text').css('font-weight',' bold')">Bold</button>
		<button onclick= "document.getElementById('my_text').style.fontWeight = 'lighter'">Light</button>
		<button id="my_id_button">Green</button>
		<button id="my_id_button_2">Back to black</button>		
	</body>
</html>
