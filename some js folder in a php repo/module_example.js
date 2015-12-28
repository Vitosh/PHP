<!DOCTYPE HTML>
<html>
    <head>  
    </head>
	<body>
		<script type="text/javascript">
		// Example of modules in JavaScript
			'use strict';
			var vitoshacademy = (function(){

				var articles = [];
				var authors = [];

				function letArticles(date, title){
					articles.push([date,title]);
				}

				function changeArticleTitle(number, newTitle){
					articles[number][1] = newTitle;
				}

				function getArticles(){
					return articles;
				}

				return{
					la: letArticles,
					ga: getArticles,
					ca: changeArticleTitle 
				};
			})();

			vitoshacademy.la("12/12/2015","How to code?");
			vitoshacademy.la("12/12/2016","How to code even better?");
			console.log(vitoshacademy.ga());
			vitoshacademy.ca(1,"Changed article title to this");
			console.log(vitoshacademy.ga());
		</script>
    </body>
</html>
