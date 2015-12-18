<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>VitoshAcademy</title>
		<style>
		.file_present{
			background-color: blue !important;
			color: yellow !important;
		}
		
		#block_container{
		}
		
		#fileplace {
			display:inline;
			color:blue;
			background-color: yellow;
			color:blue;
			width: 200px;
			height: 100px;
			border: 1px solid black;
			padding: 10px;
			margin:30px;
		}
		
		#instructions{
			display:inline;
			color:white;
			background-color:white;
			width: 200px;
			height: 100px;
			border: 0px solid black;
			padding: 10px;
			margin:30px;
		}
		
		</style>
		<script>
		var fileName;
		window.addEventListener("load", init);

		function init() {
			var readingPlace = document.getElementById('fileplace');
			readingPlace.addEventListener('dragover', my_dragover);
			readingPlace.addEventListener('dragenter', my_dragenter);
			readingPlace.addEventListener('dragleave', my_dragleave);
			readingPlace.addEventListener('drop', my_drop);
		}

		function my_dragover(event) {
			event.stopPropagation();
			event.preventDefault();
			event.dataTransfer.dropEffect = 'move';
		}

		function my_dragenter(event) {
			event.target.classList.add("file_present");
			document.getElementById("instructions").classList.add("file_present");
		}

		function my_dragleave(event) {
			event.target.classList.remove("file_present");
			document.getElementById("instructions").classList.remove("file_present");
		}

		function my_drop(event) {
			event.stopPropagation();
			event.preventDefault();

			if (event.dataTransfer.files[0]) {
				fileName = event.dataTransfer.files[0].name;
				fileName = fileName.split(".")[0];
				var my_reader = new FileReader();
				my_reader.addEventListener("load", readFile);
				my_reader.readAsText(event.dataTransfer.files[0], "UTF-8");
			}
		}

		function readFile(event) {
			document.getElementById("instructions").classList.remove("file_present");

			var body = document.getElementsByTagName("body")[0];
			var rows = event.target.result.split("\n");
			var title = document.createElement("h1");
			title.appendChild(document.createTextNode(fileName));
			body.appendChild(title);
			var my_list = document.createElement("ul");
			body.appendChild(my_list);

			for (var i = 0; i < rows.length; i++) {
				var li = document.createElement("li");
				li.appendChild(document.createTextNode(rows[i]));
				my_list.appendChild(li);
			}
		}

		</script>
	</head>
	<body>
		<h1>File to read</h1>
		<div id="block_container">
			<div id="fileplace">Drag file here</div>
			<div id="instructions">Now Release!</div>
		</div>
	</body>
</html>
