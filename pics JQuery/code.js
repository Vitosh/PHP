$(document).ready(function(){

		show_1();
		show_2();
 });

function show_1(){
    var my_random = Math.random();

    if (my_random < 0.25){
	   $("#container #back1").fadeIn("fast").fadeOut("slow");
	} 
    else if (my_random < 0.50){
        $("#container #back3").fadeIn("slow").fadeOut("fast");
    }
    else if (my_random < 0.75){
        $("#container #back5").fadeIn("fast").fadeOut("fast");
    }
    else{
        $("#container #back7").fadeIn("slow").fadeOut("slow");
    }
    
    setTimeout("show_1()",my_random*1000);
};

function show_2(){
    var my_random = Math.random();

    if (my_random < 0.25){
	   $("#container #back2").fadeIn("fast").fadeOut("slow");
	} 
    else if (my_random < 0.50){
        $("#container #back4").fadeIn("slow").fadeOut("fast");
    }
    else if (my_random < 0.75){
        $("#container #back6").fadeIn("fast").fadeOut("fast");
    }
    else{
        $("#container #back8").fadeIn("slow").fadeOut("slow");
    }
    
    setTimeout("show_1()",my_random*100);
};