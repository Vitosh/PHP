<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>VitoshAcademy</title>
    <script>
    	var total_result = 0;

        window.addEventListener("load", setup);

        function setup() {
        	for (var i = 1; i <= 18; i++) {
               document.getElementById(String("increase"+i)).addEventListener("mouseover", counter);
               document.getElementById(String("increase"+i)).addEventListener("click", reverse);
           }
       }
       
       function reverse(event){
        if (!event) event = window.event;
        var target;
            //console.log(event.target.id);
            if (event.target) {
                target = event.target;
            } else {
                target = event.srcElement;
            }
            
            var alterWert = parseInt(target.innerHTML);
            target.innerHTML = alterWert * -1;
            increment(alterWert * -1);
        }

        function counter(event) {
            if (!event) event = window.event;
            var target;
            //console.log(event.target.id);
            if (event.target) {
                target = event.target;
            } else {
                target = event.srcElement;
            }
            if (String(event.target.id).slice(-1) == 4){
            	target.innerHTML = parseInt(target.innerHTML) - 10;
              increment(-10);
              return;
          }
          var alterWert = parseInt(target.innerHTML);
          target.innerHTML = alterWert + 1;
          increment();
      }

      function increment(myVariable){
       if (typeof myVariable === 'undefined'){
          myVariable = 1
      }
      total_result+=myVariable;
      document.getElementById("result").innerHTML = "The result is " + total_result;
      if (total_result === 1000) {
          document.getElementById("GameOver").innerHTML = "Super, you have reached the goal!";
      }
  }

</script>
<style>
   div{
     bgcolor: "marine";
 }
 .rTable {
     display: table;
     width: 30%;
 }
 .rTableRow {
     display: table-row;
 }
 .rTableCell {
     display: table-cell;
     border: 1px solid #999999;
 }
</style>
</head>

<body>
    <h1>AnotherJSGame</h1>


    <h2 id="result">Start moving aroung the table</h2>
    <div class="rTable">
      <div class="rTableRow">
         <div class = "rTableCell" id="increase1">0</div>
         <div class = "rTableCell" id="increase2">0</div>
         <div class = "rTableCell" id="increase3">0</div>
     </div>
     <div class="rTableRow">
         <div class = "rTableCell" id="increase4">0</div>
         <div class = "rTableCell" id="increase5">0</div>
         <div class = "rTableCell" id="increase6">0</div>
     </div>
     <div class="rTableRow">
         <div class = "rTableCell" id="increase7">0</div>
         <div class = "rTableCell" id="increase8">0</div>
         <div class = "rTableCell" id="increase9">0</div>
     </div>
     <div class="rTableRow">
         <div class = "rTableCell" id="increase10">0</div>
         <div class = "rTableCell" id="increase11">0</div>
         <div class = "rTableCell" id="increase12">0</div>
     </div>
     <div class="rTableRow">
         <div class = "rTableCell" id="increase13">0</div>
         <div class = "rTableCell" id="increase14">0</div>
         <div class = "rTableCell" id="increase15">0</div>
     </div>
     <div class="rTableRow">
         <div class = "rTableCell" id="increase16">0</div>
         <div class = "rTableCell" id="increase17">0</div>
         <div class = "rTableCell" id="increase18">0</div>
     </div>
 </div>
 <h2 id="GameOver">Try to reach 1000!</h2>

 
 <noscript>Activate JS!</noscript>
</body>
</html>