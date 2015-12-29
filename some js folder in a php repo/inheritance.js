<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<script type="text/javascript">
			Function.prototype.extends = function (parent){
				this.prototype = Object.create(parent.prototype);
				this.prototype.constructor = this;
			}

			function Article(title){
				if (!title){
					throw new Error();
				}
				this._title = title;

				this.information = function(){
					if (this._author==undefined){
						return "The title of the article is <<" +this._title + ">>!";
					} else {
						return "The article <<" + this._title + ">> is written by " + this._author + ". The keywords are: " + this._keywords +".";
					}
				}
			}

			// Article.prototype.information = function(){
			// 	if (this._author==undefined){
			// 		return "The title of the article is <<" +this._title + ">>!";
			// 	} else {
			// 		return "The article <<" + this._title + ">> is written by " + this._author + ". The keywords are: " + this._keywords +".";
			// 	}
			// }

			function JavaScriptArticle (title, author, keywords){
				Article.call(this,title);
				this._author = author;
				this._keywords = keywords;
			}

			//JavaScriptArticle.extends(Article);

			var another_article = new JavaScriptArticle("How to code","The Jedi Coder","code,have fun");
			console.log(another_article.information());
			var article_b = new Article("How to code");
			console.log(article_b.information());

		</script>
    </body>
</html>
