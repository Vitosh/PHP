<!DOCTYPE HTML>
<html>
    <head>  
    </head>
	<body>
		<script type="text/javascript">
		var square_plus_five = function square_plus_five1 (n){
			return n*n+5;
		}
		console.log(square_plus_five(5));

		var square_plus_ten = function(n){
			return n*n+10;
		}
		console.log(square_plus_ten(10));

		(function(){
			console.log("Here comes the boom!");
		})();

		var square_plus_hundred = new Function("n","return n*n-100;");
		console.log(square_plus_hundred(5));

		var numbers = [1,23,5,6];
		console.log(Math.max.apply({},numbers));
		console.log(Math.min.apply(null,numbers));
		console.log(Math.min.call(null,4,5,6,2));
		console.log(Math.max.call(null,4,5,6,2));

		</script>
    </body>
</html>
