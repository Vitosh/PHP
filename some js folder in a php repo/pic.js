<html>
<head>
    <title>Game</title>
    <style>
        body{
            margin: 5px;
            background-color:yellow;}
        }
        img{
            margin:5px;
            height:20%;
            width:20%;
            }
        
    </style>
    <script>
        window.onload = init;
        counter = 0;
        function init()
        {
            images = document.getElementsByTagName("img");
            for (var i = 0; i<images.length; i++)
            {
                images[i].onclick = showAnswer;
            }
        }
        
        function generateRandom(fromValue, toValue, withoutValue)
        {
            
            var random_result = Math.floor((Math.random()*toValue)+fromValue);
            
            if (random_result == withoutValue)
            {
                if (withoutValue == 0)
                {
                    random_result = 1;
                }
                else
                {
                    random_result = random_result-1;
                }
            }       
            
            return random_result;
        }
        
        function showAnswer(eventObj)
        {
            var image = eventObj.target;
            var name = image.id;
            var path = image.src;
            
            if (path.indexOf("blur")> -1)
            {
                name = name + ".jpg";
            }
            else
            {
                name = name + "blur.jpg";
            }                        
            image.src = name;
            
            for (var k = 0; k<images.length; k++){
              if (images[k].id == eventObj.target.id)
              {
                var result = k;                
              }   
            }
            
            result = generateRandom(0,images.length,result)
            
            counter ++;            
            if (counter%2==1){ 
                document.images[result].click();
            }
        }   
    </script>
</head>

<body>
    <img id="zero" src="zeroblur.jpg">
    <img id="one" src="oneblur.jpg">
    <img id="two" src="twoblur.jpg">
    <img id="three" src="threeblur.jpg">
    <img id="four" src="fourblur.jpg">
    <img id="five" src="fiveblur.jpg">
</body>
</html>