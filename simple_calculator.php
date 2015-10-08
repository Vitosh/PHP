<!DOCTYPE HTML>
<html>
<head>
	<title>Lucky Mathematician</title>
</head>
<body>
    <div class="container" id="main_div">
        <div id="div_1" ></div>
        <div id="div_2" ></div>
        <input id="result_try" type="number" />  
        <form id="my_form">
            <input type ="submit" class="btn btn-success" value="Check your knowledge!" />
        </form>
        <form id="my_deletion" >
            <input type ="submit" class="btn btn-info" value="Reset"/>
        </form>
        <div id="my_result"></div>
        <div id="score"></div>
    </div>
    

    </body>
    <script> 
    window.onload = function(){ 
        document.getElementById('my_result').innerHTML = "Result -> " + getCookie("current_result");
        var first_random = Math.floor((Math.random() * 10) + 1);
        var second_random = Math.floor((Math.random() * 100) + 1);
        var result = parseInt(document.cookie);
        loadTwoRandoms();
        checkCookie();
        document.getElementById("my_form").addEventListener("submit", check);
        document.getElementById("my_deletion").addEventListener("submit",deleteCookies);    
        
        function deleteCookies(){
            setCookie("current_result",0,30);
        }
        
        function check(){
            console.log(first_random);
            var result = parseInt(getCookie("current_result"));
            console.log(result);
            
            var try_number = parseInt(document.getElementById('result_try').value,10);
            var score = document.cookie;
            if (try_number == first_random+second_random){
                document.getElementById('my_result').innerHTML = "Bravo!";
                result +=1 ;
                setCookie("current_result",result,30);
            }   else    {
                document.getElementById('my_result').innerHTML = "Nope...";
                result -=1 ;
                setCookie("current_result",result,30);
            }
            
        }
        
        function loadTwoRandoms(){
            console.log("random loaded here");
            var field1 = document.getElementById('div_1');
            var field2 = document.getElementById('div_2');
            
            field1.innerHTML = first_random;
            field2.innerHTML = second_random;
        }
        
        function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname+"="+cvalue+"; "+expires;
            }
        
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
            }
            return "";
            }
        
        function checkCookie() {
            var score = getCookie("current_result");
            if (score != "") {
            } else {
            result = 0;
            if (score != "" && score != null) {
               setCookie("current_result", score, 30);
            }
            }
        }
        
        
    };
    </script>
    <style>
    #my_result{
        background-color:yellow;
    }
    #main_div {
        outline: 1px solid orange;
        position:absolute;
        width:40%;
        height:40%;
        z-index:15;
        top:10%;
        left:10%;
        margin:-100px 0 0 -150px;
        background:red;
    }
    
    button, input {
        margin: 10px;
        padding: 10px;
    }

    
    div{
        margin-top: 15px;
        margin-bottom:15px;
        font-family: 'Oswald', sans-serif;
        font-size: 22px;
    }
    </style>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</html>