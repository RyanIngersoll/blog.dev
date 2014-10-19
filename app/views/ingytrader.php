<!DOCTYPE html>
<html>
<head>
	<title>ingytrader.com</title>
	<!-- link to jquery commands file saved to make mac -->
	<script src="/js/jquery-1.11.1.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- css classes -->
	<style type="text/css">

.myButton {
	background-color:#f00c1f;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100px;
	border:12px solid black;
	display:inline-block;
	cursor:pointer;
	color:black;
	font-family:Impact;
	font-size:28px;
	font-weight:bold;
	font-style:italic;
	padding:32px 44px;
	text-decoration:none;
	text-shadow:4px 7px 0px #ffffff;
}
/*.myButton:hover {
	background-color: black;
}*/
.myButton:active {
	position:relative;
	top:1px;
}

		body{
			text-align: center;
			background-color: white;
			/*cursor:url("cellphone.png"), auto;*/
			/*$('.game-board').css('cursor','url(img/budfox.jpeg), auto');*/	
		}

		#brand {
			color: white;
		}

		#blank {
			color: transparent;
		}

		#codingProblem{
			color: white;
		}

		#codingProblem2{
			color: black;
		}

		#portfolio{
			color: black;
		}

		#github{
			color: black;
		}

		#linkedin{
			color: black;
		}

		#home{
			color: black;
		}


		#felonies {
			color: red;
		}

		.jumbotron {
              padding: 0px;
              margin-bottom: 20px;
              background-color: transparent;
              text-align: center;

              color: black;
              float: right;
              opacity: 0.8;
    			filter: alpha(opacity=40);
              	/*background-image: url(img/bitcoin_conversion.jpeg);*/
              }

              .container .jumbotron {
              border-radius: 50px;
              }

              #start-button{
              	border-radius: 50px;
              }

		/*.game-board{
			/*width: 700px;*/
			/*text-align: center;*/
			/*margin-left: 0px;
			padding: 0px;
			margin-bottom: 20px;
			padding-bottom: 20px;
			float: left;

			/*border: 1px solid white;
		}*/

		.mole{
			display: none;
			/*text-align: center;*/
		}
		.mole-hole{
			width: 115px;
			height: 115px;
			
			float: left;
			margin-left: 0px;
			border: 2px solid white;

			/*text-align: center;*/
		}

		span{
			color: green;
		}
		h1{
			color: black;
		}
		h2{
			color: black;
		}
		.felony{
			color: white;
		}

	</style>
</head>

<!-- ******************************************************************************* -->

<body background="">
 
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-10 col-md-8">

          	<div class="jumbotron">
            
				<!-- <h3>INGYTRADER.COM</h3> -->
				<audio class="audio-player" id="kidrock" src="Kid Rock-Bawitdaba (www.myfreemp3.cc).mp3"></audio>

				<audio class="audio-player" id="bombsiren" src="BOMB_SIREN-BOMB_SIREN-247265934.mp3"></audio>

				<audio class="audio-player" id="robocop" src="robocop.mp3"></audio>

				<audio class="audio-player" id="jay-Z" src="07jayzon_to_the_next_one_feat._swizz_b.mp3"></audio>

				<audio class="audio-player" id="nuts" src="Im up to my ass.mp3"></audio>

				<audio class="audio-player" id="greed" src="Greed is Good.mp3"></audio>

				<audio class="audio-player" id="losses" src="I dont like losses.mp3"></audio>

				<audio class="audio-player" id="mainthing" src="Main thing about money.mp3"></audio>
				
			</div>

		<div class = "felony">
			
		</div>

		</div>
	</div>
</div> 

	<div class="container-fluid">
		

		<div class="mole-hole" id="1">
			<img class="black" id="black" src="pitchblack.jpg"></img>
		</div>
		<div class="mole-hole" id="2">
			
		</div>
		<div class="mole-hole" id="3">
			
		</div>
		<div class="mole-hole" id="4">
			
		</div>

		<div class="mole-hole" id="5">
			
			
		</div>

		<div class="mole-hole" id="6">
			
		</div>
		<div class="mole-hole" id="7">
			
		</div>
		<div class="mole-hole" id="8">
			
		</div>
		<div class="mole-hole" id="9">
			
		</div>
		<div class="mole-hole" id="10">
			
		</div>
		
		
	</div>

	

	

	<iframe id= "george" width="420" height="315" src="//www.youtube.com/embed/xiwtXHPwGPE" frameborder="0" allowfullscreen></iframe>

	

	<h1><a href="http://espn.go.com/" target="_blank" id="portfolio" >Portfolio</a></h1>

	<h1><a href="https://www.linkedin.com/profile/view?id=49609689&trk=nav_responsive_tab_profile" target="_blank" id="linkedin" >LinkedIn Profile</a></h1>

	<h1><a href="https://github.com/RyanIngersoll" target="_blank" id="github" >GitHub Account</a></h1>

	<h1><a href="ingytrader.com" target="_blank" id="home" >ingytrader.com</a></h1>


<div class="container">
<p id="blank" >"                 "</p>
<p id="blank" >"                 "</p>

<h1 id="codingProblem" >NEED A PROGRAMER?</h1>
<h1 id="codingProblem2" >HIRE ME</h1>
<img id="hireMe" src="hireme.jpg"  alt= "hireme" >


<h1><button id="start-button" class="myButton">do it</button></h1>

<p id="blank" >"                 "</p>
<p id="blank" >"                 "</p>

<h1 id="brand" >ingytrader.com</h1>
<h1 id="codingProblem2" >ingytrader.com</h1>
</div>
	<script>

				var ingy;
				var counter = 0;
				hideGeorge();
				hideLinks();
				//hideHireMe();
        	
        	
    		

		function getshortI(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='I.png'  alt='whack-a-mole'>").appendTo("#" + 1).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortN(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='n.png'  alt='whack-a-mole'>").appendTo("#" + 2).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortG(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='g.png'  alt='whack-a-mole'>").appendTo("#" + 3).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortY(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='superY.jpeg'  alt='whack-a-mole'>").appendTo("#" + 4).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortT(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='ttt.png'  alt='whack-a-mole'>").appendTo("#" + 5).show(39700).delay(5000).hide("explode",2000);
	    			};

	  
			function getshortFirstR(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='letterr.png'  alt='whack-a-mole'>").appendTo("#" + 6).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortA(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='a.png'  alt='whack-a-mole'>").appendTo("#" + 7).show(39700).delay(5000).hide("explode",2000);
	    			};

			function getshortD(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='greenround.png'  alt='whack-a-mole'>").appendTo("#" + 8).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortE(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='lettere.jpeg'  alt='whack-a-mole'>").appendTo("#" + 9).show(39700).delay(5000).hide("explode",2000);
	    			};									

	    	function getshortR(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='r.png'  alt='whack-a-mole'>").appendTo("#" + 10).show(39700).delay(5000).hide("explode",2000);
	    			};



			function getI(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='I.png'  alt='whack-a-mole'>").appendTo("#" + 1).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getN(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='n.png'  alt='whack-a-mole'>").appendTo("#" + 2).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getG(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='g.png'  alt='whack-a-mole'>").appendTo("#" + 3).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getY(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='superY.jpeg'  alt='whack-a-mole'>").appendTo("#" + 4).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getT(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='ttt.png'  alt='whack-a-mole'>").appendTo("#" + 5).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

			function getFirstR(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='letterr.png'  alt='whack-a-mole'>").appendTo("#" + 6).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getA(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='a.png'  alt='whack-a-mole'>").appendTo("#" + 7).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

			function getD(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='greenround.png'  alt='whack-a-mole'>").appendTo("#" + 8).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getE(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='lettere.jpeg'  alt='whack-a-mole'>").appendTo("#" + 9).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};									

	    	function getR(){
        		
    			// var rand = Math.floor(Math.random() * 12) + 1;
	    		// if(score < 200000){
	    			$("<img id='theMole' class='mole' src='r.png'  alt='whack-a-mole'>").appendTo("#" + 10).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};	

	    		function ingyTrader(){
	    			getI();
	    			getN();
	    			getG();
	    			getY();
	    			getT();
	    			getFirstR();
	    			getA();
	    			getD();
	    			getE();
	    			getR();
	    			counter++;
						if(counter == 50 ||counter == 51 || counter == 52 || counter == 53 || counter == 54) {
						   clearInterval(ingy);
						}
	    		};

	    		function shortIngyTrader(){
	    			getshortI();
	    			getshortN();
	    			getshortG();
	    			getshortY();
	    			getshortT();
	    			getshortFirstR();
	    			getshortA();
	    			getshortD();
	    			getshortE();
	    			getshortR();
	    		}

	    		



	    	function getRoboCop() {
			      $("#robocop").trigger("play");
    		};

    		function getBombSiren() {
			      $("#bombsiren").trigger("play");
    		};

    		function getKidRock() {
			      $("#kidrock").trigger("play");
    		};

    		function getJZ() {
			      $("#jay-Z").trigger("play");
    		};

    		function hideHireMe() {
    			$("#hireMe").hide();
    		};


    		function hideGeorge() {
    			$("#george").hide();
    		};

    		function slideGeorge() {
    			$("#george").slideDown(3000).delay(40000).slideUp(3000);
			      
    		};

    		function playGeorge() {
    			$("#george").trigger("play");
    		};

    		function hireMe(){
	    			$('#hire-me.jpg').show(3000);
	    		}

    			

	    		function bombSiren1(){
	    			getBombSiren();
	    			
	    			setTimeout(kidRock, 500);
	    		}

	    		function kidRock(){
	    			getKidRock();
	    			
	    			setTimeout(bombSiren2, 500);
	    		}

	    		function bombSiren2(){
	    			
	    			getBombSiren();
	    			setTimeout(intro1, 20000);
	    		}

	    		function intro1(){
	    			shortIngyTrader();
	    			setTimeout(intro2, 1300);
	    		}

	    		function intro2(){
	    			shortIngyTrader();
	    			setTimeout(intro3, 1300);
	    		}

	    		function intro3(){
	    			shortIngyTrader();
	    			setTimeout(intro4, 1300);
	    		}

	    		function intro4(){
	    			shortIngyTrader();
	    			setTimeout(intro5, 1300);
	    		}

	    		function intro5(){
	    			shortIngyTrader();
	    			setTimeout(intro6, 1300);
	    		}

	    		function intro6(){
	    			shortIngyTrader();
	    			setTimeout(intro7, 1300);
	    		}

	    		function intro7(){
	    			shortIngyTrader();
	    			setTimeout(intro8, 1300);
	    		}

	    		function intro8(){
	    			shortIngyTrader();
	    			setTimeout(intro9, 36000);
	    		}

	    		function intro9(){
	    			ingyTraderLaunch();
	    			setTimeout(startGeorge, 200000);
	    		}

	    		

	    		function startGeorge(){
	    			slideGeorge();
	    			//slides george  down delays 40 sec then goes back up
	    			setTimeout(playGetGeorge, 500);
	    		}

	    		function playGetGeorge(){
	    			playGeorge();
	    			//plays george 40seconds
	    			setTimeout(showLinks, 40000);
	    		}

	    		// function playJZ(){
	    		// 	getJZ();
	    		// 	//plays george 40seconds
	    		// 	setTimeout(showHireMe, 500);
	    		// }

	    		// function showHireMe(){
	    		// 	hireMe();
	    		// 	// shows hire me image
	    		// 	setTimeout(showLinks, 500);
	    		// }

	    		function showLinks(){
	    			showLinks();
	    			// shows links
	    		}


	    		
	    		function hideLinks(){
    			$('#portfolio').hide();
	    		$('#github').hide();
	    		$('#linkedin').hide();
	    		$('#home').hide();
    		}

	    		function showLinks(){
	    			$('#portfolio').slideDown(2000);
	    			$('#github').slideDown(4000);
	    			$('#linkedin').slideDown(6000);
	    			$('#home').slideDown(8000);
	    			//setTimeout(ingyTraderLaunch, 23000);
	    		}

	    		function slideBlack(){
	    			$('#black').slideUp(20000);
	    			}

	    		function ingyTraderLaunch(){

	    			ingy = setInterval(ingyTrader, Math.floor(Math.random() * 5000) + 1000);
	    			}

	    	// setTimeout(ingy, 3000);


			$( document ).ready(function() {

    			
				
	    			$('#start-button').click(function() {
	    				
        				$('#start-button').hide("explode",2000);
        				$('#hireMe').hide("explode",2000);
        					
        					getRoboCop();
        					slideBlack();
        					bombSiren1();

  						}); 	

    });    		

	</script>

	
	<!-- </div> -->

</body>
</html>