<!DOCTYPE html>
<html>
<head>
	<title>money-never-sleeps</title>
	<!-- link to jquery commands file saved to make mac -->
	<script src="jquery-1.11.1.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- css classes -->
	<style type="text/css">

		body{
			text-align: center;
			cursor:url("cellphone.png"), auto;
			/*$('.game-board').css('cursor','url(img/budfox.jpeg), auto');*/
			
		}


		#felonies {
			color: red;
		}

		.jumbotron {
              padding: 0px;
              margin-bottom: 20px;

              text-align: center;
              color: black;
              float: right;
              opacity: 0.5;
    			filter: alpha(opacity=40);
              

              /*background-image: url(img/bitcoin_conversion.jpeg);*/
              }
              .container .jumbotron {
              border-radius: 0px;
              }

		.game-board{
			/*width: 700px;*/
			/*text-align: center;*/
			margin-left: 130px;
			padding: 20px;
			margin-bottom: 20px;
			padding-bottom: 20px;
			float: left;

			/*border: 1px solid black;*/
		}

		.mole{
			display: none;
			/*text-align: center;*/
		}
		.mole-hole{
			width: 150px;
			height: 150px;
			
			float: left;
			margin: 15px;
			border: 1px transparent;

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

<body background="bud+fox.jpg">
 
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-10 col-md-8">

           <div class="jumbotron">
            
				<h3>MONEY NEVER <span>$</span>LEEPS</h3>
				
				<h4>Salary: $<span id="score">0</span></h4>
				<h4>Annual Bonus: $<span id="bonus3">0</span></h4>
				<h4>Felony Charges: $<span id="felonies">0</span></h4>
				<h4>Total Wealth: $<span id="total">0</span></h4>

				<h4><button id="start-button" class="btn-btn primary">START</button></h4>

				<audio class="audio-player" id="money" src="Money never sleeps.mp3"></audio>

				<audio class="audio-player" id="bucks" src="Its all about bucks.mp3"></audio>

				<audio class="audio-player" id="wake-up" src="Wake Up Call.mp3"></audio>

				<audio class="audio-player" id="dog" src="Get a dog.mp3"></audio>

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

	<div class="game-board">
		

		<div class="mole-hole" id="1">
			
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
		<div class="mole-hole" id="11">
			
		</div>
		<div class="mole-hole" id="12">
			
		</div>
		

	</div>

	<script>
		// var holes = $('.mole-hole');
		var i = 0;
		var score = 0;
		var timeoutID;
		var timeoutID2;
		var timeoutID3;
		var timeoutID3;
		var timeoutID4;
		var bonus = 0;
		var bonus2 = 0;
		var bonus3 = (bonus + bonus2);
		var felonies = 0;
		var total = (score + bonus3 - felonies);


		// $('#payfine')html(felonies = 0);

        $(document).ready(function(){

        	function getSound() {
			      $("#money").trigger("play");
    		};

    		function getSound2() {
			      $("#bucks").trigger("play");
    		};

    		function getSound3() {
			      $("#wake-up").trigger("play");
    		};
        	
    		function getSound4() {
			      $("#dog").trigger("play");
    		};

    		function getSound5() {
			      $("#nuts").trigger("play");
    		};

    		function getSound6() {
			      $("#greed").trigger("play");
    		};

    		function getSound8() {
			      $("#losses").trigger("play");
    		};

    		function getSound7() {
			      $("#mainthing").trigger("play");
    		};

        	function getRand(){
        		
    			var rand = Math.floor(Math.random() * 12) + 1;
	    		if(score < 200000){
	    			$("<img id='theMole' class='mole' src='gg.jpeg'  alt='whack-a-mole'>").appendTo("#" + rand).show(1000);
	    			timeoutID = setTimeout(function(){
	    				$("img").hide(3000);
	    			},2000);
	    		} else if(score == 200000) {
	    			getSound();
	 				$("<img id='theMole' class='mole' src='gg.jpeg'  alt='whack-a-mole'>").appendTo("#" + rand).show(500);
	 				timeoutID = setTimeout(function(){
	    				$("img").hide(2000);
					},2000);
					
	 			} else if(score > 200000) {
	 				$("<img id='theMole' class='mole' src='gg.jpeg'  alt='whack-a-mole'>").appendTo("#" + rand).show(500);
	 				timeoutID = setTimeout(function(){
	    				$("img").hide(1500);
					},1500);
						getBonus();
						getBonus2();

	 			} 

	        };

	        function getBonus(){
        		
    			 var bonusRound = Math.floor(Math.random() * 20) + 1;

	    			 if(bonusRound == 1 || bonusRound == 4 || bonusRound == 8 || bonusRound == 10){
						$("<img id='theBonus' class='Bonus' src='signing-bonus.jpg'  alt='Bonus-Round'>").appendTo("#" + bonusRound).show(500);
			 				timeoutID2 = setTimeout(function(){
			    				$("#theBonus").hide(3000);

		    				},4000);
		 				}
	        		};

	        function getBonus2(){
        		
    			 var bonusRound2 = Math.floor(Math.random() * 20) + 1;

	    			 if(bonusRound2 == 2 ||  bonusRound2 == 12){
						$("<img id='theBonus2' class='Bonus2' src='blue star.jpg'  alt='Bonus-Round2'>").appendTo("#" + bonusRound2).show(500);

			 				timeoutID3 = setTimeout(function(){
			    				$("#theBonus2").hide(3000);

		    				},4000);
		 				}
	        		};

	        function getBusted(){
        		
    			 var arrested = Math.floor(Math.random() * 12) + 1;

	    			 if(arrested == 1 ||  arrested == 5 || arrested == 8){
						$("<img id='foxxy' class='budfoxx' src='busted.jpg'  alt='busted'>").appendTo("#" + arrested).show(500);

			 				timeoutID4 = setTimeout(function(){
			    				$("#foxxy").hide(3000);

		    				},4000);
		 				}
	        		};

	        function getBustedRed(){
        		
    			 
						$("<img id='bustedred' class='red' src='bustedred.jpg'  alt='bustedred'>").appendTo("#3").show(2000).delay(1000).hide(1000);
		 				};

        	$('#start-button').click(function() {
        		//$('#start-button').hide();
        		getRand();
        		getSound6();
        		//$('.mole-hole').css('cursor','url(img/dollar_sign1.jpg), auto');
        		getBusted();

        		$('#score').html(score = 0);
        		// $('#bonus').html(bonus = 0);
        		$('#bonus3').html(bonus3 = 0);
        		$('#felonies').html(felonies = 0);
        		$('#total').html(total = 0);	
     	});  

     		$('.mole-hole').on("click", "#theMole", function() {
     						i++;
     					if(i % 5 == 0 && score > 70000){
     						getSound2();
     						getBusted();
     					}
     					 if(i %7 == 0 && score > 120000){
     						getSound4();
     						//getBusted();

     					}
     					 if(i % 9 == 0 && score > 180000){
     						getSound5();
     						//getBusted();
     					}
     					 if(i % 11 == 0 && score > 250000){
     						getSound();
     						//getBusted();
     						
     					}
     					 if(i % 13 == 0 && score > 70000){
     						getSound8();
     						//getBusted();
     					}

     					

     						
					clearTimeout(timeoutID);

					 $(this).hide("explode",1000);

					$(this).remove();
	 					
					$('#score').html(score +=10000);
					$('#total').html(score + bonus3 - felonies);
						getRand(); 
     					
     			});

     		$('.mole-hole').on("click", "#theBonus", function(){
     			getSound3();
				clearTimeout(timeoutID2);

 				$(this).hide("explode",1000);
 				$(this).remove();

     			$('#bonus3').html(bonus3 +=27349);
     			$('#total').html(score + bonus3 - felonies);
     				getBonus();
     				//getBusted();

     		});
     			
 				$('.mole-hole').on("click", "#theBonus2", function(){

     			getSound8();
				clearTimeout(timeoutID3);

 				$(this).hide("explode",1000);
 				$(this).remove();

     			$('#bonus3').html(bonus3 +=39633);
     			$('#total').html(score + bonus3 - felonies);
     				getBonus2();
     				
     				
     		});

 				$('.mole-hole').on("click", "#foxxy", function(){
 					
     			getSound7();
				clearTimeout(timeoutID4);

 				$(this).hide("explode",1000);
 				$(this).remove();

     			$('#felonies').html(felonies += 200000);
     			$('#total').html(score + bonus3 - felonies);
     			getBustedRed();
 				
     		});

     	});

    

    
        	


	</script>
</body>
</html>