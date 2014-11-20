<?php

?>
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

</style>
  </head>

  <body>


  <div>
      <label>The Evolution of a Codeup Developer</label>
      <input type="text" ng-model="yourName" placeholder="Welcome to WebDev">
      <hr>
      <h3> {{yourName}} </h3>
   </div>


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
<!-- <img id= "whitedot" src="jamesbonddot.png"  alt= "ryanspic" > -->

 
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

					$('#stage1').click(function() {
    					$('#stage1').slideUp(1000);
						
 					});

 					$('#stage2').click(function() {
    					$('#stage2').slideUp(1000);
						
 					});

 					$('#stage3').click(function() {
    					$('#stage3').slideUp(1000);
						
 					});

 					$('#stage4').click(function() {
    					$('#stage4').slideUp(1000);
						
 					});

 					$('#stage5').click(function() {
    					$('#stage5').slideUp(1000);
						
 					});

 					$('#stage6').click(function() {
    					$('#stage6').slideUp(1000);
						
 					});

 					$('#stage7').click(function() {
    					$('#stage7').slideUp(1000);
    					$('#thanks').slideDown(1000);
						
 					});
 				});
  </script>
</html>