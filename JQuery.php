<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="grune" />
	<title>DOM 2</title>
</head>
<body>
    <div class ="my_site">
        Vitoshacademy.com is not an academy, but just a nice internet side for coding. 
        </br> Also known as <a href="http://www.herecomesthecode.com">here comes the code!</a><br />
        <?php
        for ($x = 0; $x <= 99; $x++) {
            echo "So here comes a lot of test code. Line number $x </br>";
        }
        ?>
        <div id="my_div_id">
            Div in a div!</br>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" ></script>
<script>
    $(document).ready(function(){
        $('div.my_site a').attr({
         rel: 'external',
         title: 'Click to see that I own it! :)'   
        });
        $('<a href="#top">return to the top</a>').insertAfter('div.my_site');
        $('<a id="top"></a>').prependTo('body');
        
        $('<a href="#bottom">go to the bottom</a>').insertBefore('div.my_site');
        $('<a id="bottom"></a>').appendTo('body');
        
        $('#my_div_id').prepend('<hr>');
        $('#my_div_id').append(new Date().toLocaleString());
        $('#my_div_id').append('<hr>');
        
    });
</script>
</html>