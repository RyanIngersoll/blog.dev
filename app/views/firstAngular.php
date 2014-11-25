
<!doctype html>
<html ng-app="todoApp">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.1/angular.min.js"></script>
    <script src="/angular/firstAngular.js"></script>
    <link rel="stylesheet" href="/angular/firstAngular.css">
    
    
    <script src="/js/jquery-1.11.1.js"></script>
	<script src="/js/jquery-ui.js"></script>
	
	
<head>

 <style type="text/css">

#twirl	{
	position: absolute;
	width: 400px;
	height:125px;
	background-image:url(twirl.png);
	background-repeat:no-repeat;
	display:none;
	left: 100px;
	top:105px;
}

#checkbox{
	background-size: 400%;
}

#stage1{
	z-index: -1;
	position: absolute;
	margin-top: -200px;
	margin-left: -590px;
	background-color: transparent;
}

#stage2{
	z-index: -2;
	position: absolute;
	margin-top: -200px;
	margin-left: -530px;
	background-color: transparent;
}

#stage3{
	z-index: -3;
	position: absolute;
	margin-top: -200px;
	margin-left: -460px;
	background-color: transparent;
}

#stage4{
	z-index: -4;
	position: absolute;
	margin-top: -200px;
	margin-left: -390px;
	background-color: transparent;
}

#stage5{
	z-index: -5;
	position: absolute;
	margin-top: -200px;
	margin-left: -330px;
	background-color: transparent;
}

#stage6{
	z-index: -6;
	position: absolute;
	margin-top: -200px;
	margin-left: -260px;
	background-color: transparent;
}

#stage7{
	position: absolute;
	background-color: transparent;
	z-index: -7;
	/*position: absolute;*/
	margin-top: -200px;
	margin-left: -200px;
}

#thanks{
	/*position: absolute;*/
	background-color: transparent;
	z-index: -8;
	text-align: center;
	margin-left: 390px;
	position: absolute;
	margin-top: 0px;
	
}
#helloWorld{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#fizz{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#fizz1{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#fizz2{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}
#todo1{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#todo2{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#whack{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}
#whack2{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#blog{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#bot{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}

#next{
	/*position: absolute;*/
	background-color: transparent;
	z-index: 1;
	text-align: center;
	/*margin-left: 390px;*/
	
	margin-top: 300px;
	
}


</style>
  </head>

  <body>


  <div>
      <label>The Evolution of a Codeup Developer</label>
      <input type="text" ng-model="yourName" placeholder="Welcome to WebDev">
      <hr>
      <h3> {{yourName}} </h3>
   </div>

<?php
  $img = imagecreatetruecolor(400, 600);
  echo imagesx($img);

  
?>

<div>
<img id= "stage1" src="evolve1.png"  alt= "ryanspic" >

<img id= "stage2" src="evolve2.png"  alt= "ryanspic" >
<img id= "stage3" src="evolve3.png"  alt= "ryanspic" >
<img id= "stage4" src="evolve4.png"  alt= "ryanspic" >
<img id= "stage5" src="evolve5.png"  alt= "ryanspic" >
<img id= "stage6" src="evolve6.png"  alt= "ryanspic" >

<img id= "stage7" src="evolve7.png"  alt= "ryanspic" >
<h3 id="thanks">Thank You</h3>

</div>
<p id="helloWorld"> {?php>} echo "Hello, World!";{?>}</p> 
<!-- <img id= "whitedot" src="jamesbonddot.png"  alt= "ryanspic" > -->
<p id="fizz"> "FIZZ BUZZ"</p> 
 <p id="fizz1"> ?php>} for ($num = 1; $num{<}= 100; $num++){

	if (($num % 3 == 0) && ($num % 5 == 0)) {
		echo $num . " FizzBuzz" . PHP_EOL;
	}

	elseif($num % 5 == 0){

		echo $num . " Buzz" . PHP_EOL;
	}
	elseif($num % 3 == 0){
		echo $num . " Fizz" . PHP_EOL;
	}	
	else {
	 	echo $num . PHP_EOL;
	}
?></p> 

<p id="fizz2"> 
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
Fizz
22
23
Fizz
Buzz
26
Fizz
28
29
FizzBuzz
31
32
Fizz
34
Buzz
Fizz
37
38
Fizz
Buzz
41
Fizz
43
44
FizzBuzz
46
47
Fizz
49
Buzz
Fizz
52
53
Fizz
Buzz
56
Fizz
58
59
FizzBuzz
61
62
Fizz
64
Buzz
Fizz
67
68
Fizz
Buzz
71
Fizz
73
74
FizzBuzz
76
77
Fizz
79
Buzz
Fizz
82
83
Fizz
Buzz
86
Fizz
88
89
FizzBuzz
91
92
Fizz
94
Buzz
Fizz
97
98
Fizz
Buzz
</p> 

<p id="todo1"> The TO DO List -- PHP</p> 

<p id="todo2"> The TO DO List -- Javascript/MySQL</p> 

<p id="whack"> Whack-a-Mole -- Intro to Jquery</p> 

<p id="whack2"> $('#jquery').click(function() {
    					$('#animation').slideUp(1000);
						
						
 					});</p> 

<p id="blog"> Intro to Laravel and "THE BLOG"</p> 

<p id="bot"> "The Budget Bot"</p> 

<p id="next"> "What Comes Next???"</p> 

    <h5 id= "center" ></h5>
    

    <div id="archive" ng-controller="TodoController">

  <form ng-submit="addTodo()">
        <input type="text" ng-model="todoText"  size="50"
               placeholder="Codeup Checklist">
        <input id="add" class="btn-primary" type="submit" value="add">
    </form>

      <span> {{remaining()}} of {{todos.length}} programming stages remaining.</span>
       <a href="" ng-click="archive()">delete</a> 

      <ol id= "list" class="unstyled">
        <li ng-repeat="todo in todos">
          <input id="checkbox" type="checkbox" ng-model="todo.done">
          <span class="done-{{todo.done}}">{{todo.text}}</span>
        </li>
      </ol>
    </div>
  </body>
  <script type="text/javascript">


  			$( document ).ready(function() {
  					$('#thanks').hide();
  					$('#helloWorld').hide();
  					$('#fizz').hide();
  					$('#fizz1').hide();
  					$('#fizz2').hide();
  					$('#todo1').hide();
  					$('#todo2').hide();
  					$('#whack').hide();
  					$('#whack2').hide();
  					$('#blog').hide();
  					$('#bot').hide();
  					$('#next').hide();

					$('#stage1').click(function() {
    					$('#stage1').slideUp(1000);
						
						$('#helloWorld').slideDown(1000).delay(10000).slideUp(1000);
 					});

 					$('#stage2').click(function() {
    					$('#stage2').slideUp(1000);
    					$('#fizz').slideDown(1000).delay(8000).slideUp(1000);
						$('#fizz1').slideDown(1000).delay(33000).slideUp(1000);
  						$('#fizz2').slideDown(38000).delay(10000).slideUp(1000);
 					});

 					$('#stage3').click(function() {
    					$('#stage3').slideUp(1000);
						$('#todo1').slideDown(1000).delay(10000).slideUp(1000);
  						$('#todo2').slideDown(20000).delay(50000).slideUp(1000);
 					});

 					$('#stage4').click(function() {
    					$('#stage4').slideUp(1000);
						$('#whack').slideDown(1000).delay(10000).slideUp(1000);
						$('#whack2').slideDown(14000).delay(40000).slideUp(1000);
 					});

 					$('#stage5').click(function() {
    					$('#stage5').slideUp(1000);
    					$('#blog').slideDown(1000).delay(25000).slideUp(1000);
						
 					});

 					$('#stage6').click(function() {
    					$('#stage6').slideUp(1000);
						$('#bot').slideDown(1000).delay(25000).slideUp(1000);
						$('#next').slideDown(40000).delay(75000).slideUp(1000);;
 					});

 					$('#stage7').click(function() {
 						
    					$('#stage7').slideUp(1000);
    					$('#thanks').slideDown(1000);
						
 					});
 				});
  </script>
</html>