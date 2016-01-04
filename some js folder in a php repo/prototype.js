<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<script type="text/javascript">
		var Person = function (name,age) {
			this._name = name;
			this._age = age;
		}

		Person.prototype = {
			sayHello: function (name) {
				return ("Hello " + name);
			},
			sayBye: function (name) {
				return ("Goodbye "+ name);
			},
			sayIntroduce: function(){
				return ("My name is " + this._name + " I am " + this._age);
			},
			sayImagine: function () {
				return ("Imagine all the people ...");
			}
		}

		var Ivan = new Person('Vityata',15);
		console.log(Ivan.sayHello("Dolly"));
		console.log(Ivan.sayBye("John"));
		console.log(Ivan.sayImagine());
		console.log(Ivan.sayIntroduce());
	</script>
</body>
</html>
