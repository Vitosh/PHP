<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<script type="text/javascript">
			var articlePrototype = {
				constructor: function(title, author){
					this._title = title;
					this._author = author;
				},
				information: function(){
					return "The title is <<" + this._title + ">> from " + this._author +".";
				} 
			}
			var anotherArticle = Object.create(articlePrototype);
			anotherArticle.constructor("Code with ease","Coder");
			console.log(anotherArticle.information());
		</script>
    </body>
</html>
