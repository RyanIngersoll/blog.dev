<script>
//rotating "hire me" image animation
				var rotation = function (){
					   $("#hireMe").rotate({
					      angle:100, 
					      animateTo:1080, 
					      callback: rotation
					   });
					}

// global variables
				var title; 
				var ingy;
				var counter = 0;
				var t = 0;

// hidden images to .show() later using Jquery
				hideLinks();
				hideBlueCode();
				hideOnlineResume();
				hideFinEng1();
				$("#exitButton").hide();
				$("#slide").hide();
				$("#different").hide();
				$("#codeup").hide();
				$("#onlineResume5").hide();
				$(".jumbotron1").hide();
				$(".jumbotron2").hide();
				$(".jumbotron2b").hide();
				$(".jumbotron3").hide();
				$(".jumbotron4").hide();
				$(".jumbotron4b").hide();
				$(".jumbotron5").hide();
				$(".jumbotron5b").hide();
				$(".jumbotron6").hide();
				$(".jumbotron6b").hide();
				$(".jumbotron7").hide();
				$(".jumbotron8").hide();
				$(".jumbotron8b").hide();
				$(".jumbotron9").hide();
				$(".jumbotron10").hide();
				$(".jumbotron10b").hide();
				$(".jumbotron11").hide();
				$(".jumbotron11b").hide();
				$(".jumbotron12").hide();
				$(".jumbotron13").hide();
				$(".jumbotron14").hide();
				$(".jumbotron15").hide();
				$(".jumbotron16").hide();
				$(".jumbotron17").hide();
				$(".jumbotron18").hide();
				$(".jumbotron19").hide();
				$(".jumbotron19b").hide();
				$(".jumbotron20").hide();
				$(".jumbotron21").hide();
				$(".jumbotron22").hide();

//beginning of exploding icon functions
			function getshortI(){

	    			$("<img id='theMole' class='mole' src='I.png'  alt='whack-a-mole'>").appendTo("#" + 1).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortN(){

	    			$("<img id='theMole' class='mole' src='n.png'  alt='whack-a-mole'>").appendTo("#" + 2).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortG(){

	    			$("<img id='theMole' class='mole' src='g.png'  alt='whack-a-mole'>").appendTo("#" + 3).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortY(){

	    			$("<img id='theMole' class='mole' src='superY.jpeg'  alt='whack-a-mole'>").appendTo("#" + 4).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortT(){

	    			$("<img id='theMole' class='mole' src='ttt.png'  alt='whack-a-mole'>").appendTo("#" + 5).show(39700).delay(5000).hide("explode",2000);
	    			};

	  
			function getshortFirstR(){

	    			$("<img id='theMole' class='mole' src='letterr.png'  alt='whack-a-mole'>").appendTo("#" + 6).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortA(){

	    			$("<img id='theMole' class='mole' src='a.png'  alt='whack-a-mole'>").appendTo("#" + 7).show(39700).delay(5000).hide("explode",2000);
	    			};

			function getshortD(){

	    			$("<img id='theMole' class='mole' src='greenround.png'  alt='whack-a-mole'>").appendTo("#" + 8).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortE(){

	    			$("<img id='theMole' class='mole' src='lettere.jpeg'  alt='whack-a-mole'>").appendTo("#" + 9).show(39700).delay(5000).hide("explode",2000);
	    			};									

	    	function getshortR(){

	    			$("<img id='theMole' class='mole' src='r.png'  alt='whack-a-mole'>").appendTo("#" + 10).show(39700).delay(5000).hide("explode",2000);
	    			};

			function getI(){

	    			$("<img id='theMole' class='mole' src='I.png'  alt='whack-a-mole'>").appendTo("#" + 1).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getN(){

	    			$("<img id='theMole' class='mole' src='n.png'  alt='whack-a-mole'>").appendTo("#" + 2).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getG(){

	    			$("<img id='theMole' class='mole' src='g.png'  alt='whack-a-mole'>").appendTo("#" + 3).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getY(){

	    			$("<img id='theMole' class='mole' src='superY.jpeg'  alt='whack-a-mole'>").appendTo("#" + 4).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getT(){

	    			$("<img id='theMole' class='mole' src='ttt.png'  alt='whack-a-mole'>").appendTo("#" + 5).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

			function getFirstR(){

	    			$("<img id='theMole' class='mole' src='letterr.png'  alt='whack-a-mole'>").appendTo("#" + 6).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getA(){

	    			$("<img id='theMole' class='mole' src='a.png'  alt='whack-a-mole'>").appendTo("#" + 7).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

			function getD(){

	    			$("<img id='theMole' class='mole' src='greenround.png'  alt='whack-a-mole'>").appendTo("#" + 8).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getE(){

	    			$("<img id='theMole' class='mole' src='lettere.jpeg'  alt='whack-a-mole'>").appendTo("#" + 9).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getR(){
	    			$("<img id='theMole' class='mole' src='r.png'  alt='whack-a-mole'>").appendTo("#" + 10).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

//function calls all explosion functions together, and counts iterations to set the interval length. 
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

						if(counter == 175) {
						   clearInterval(ingy);
						}
	    		};


//launches ingytrader with its own interval time
	    		function ingyTraderLaunch(){
					ingy = setInterval(ingyTrader, 1000);
	    		}


//function for 8 correographed explosions at beginning of song  
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

//jquery is very usefull for animation, but the more functions you seperate things into, the more flexible and create you can be. 

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

    		function hideFinEng1(){
    			$("#finEng1").hide();
    		}

    		function showFinEng1() {
    			$("#finEng1").show(2000).delay(6000).hide(2000);
    		};

    		function showDifferent() {
    			$("#different").show();
    		};


//beginning of slideshow functions, show, hide, delay, toggle etc
    	
    		function showSlide1() {
    			$("#exitButton").show();
    			$(".jumbotron1").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide2() {
    			$(".jumbotron2").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide2b() {
    			$(".jumbotron2b").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};


    		function showSlide3() {
    			$(".jumbotron3").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide4() {
    			$(".jumbotron4").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide4b() {
    			$(".jumbotron4b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide5() {
    			$(".jumbotron5").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide5b() {
    			$(".jumbotron5b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide6() {
    			$(".jumbotron6").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide6b() {
    			$(".jumbotron6b").toggle("slide", 1000).delay(7000).toggle("pulsate", 1000);
    		};

    		function showSlide7() {
    			$(".jumbotron7").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide8() {
    			$(".jumbotron8").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide8b() {
    			$(".jumbotron8b").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide9() {
    			$(".jumbotron9").toggle("slide", 1000).delay(9000).toggle("pulsate", 1000);
    		};

    		function showSlide10() {
    			$(".jumbotron10").toggle("slide", 1000).delay(7000).toggle("pulsate", 1000);
    		};

    		function showSlide10b() {
    			$(".jumbotron10b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide11() {
    			$(".jumbotron11").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};


    		function showSlide11b() {
    			$(".jumbotron11b").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide12() {
    			$(".jumbotron12").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide13() {
    			$(".jumbotron13").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide14() {
    			$(".jumbotron14").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide15() {
    			$(".jumbotron15").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide16() {
    			$(".jumbotron16").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide17() {
    			$(".jumbotron17").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide18() {
    			$(".jumbotron18").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide19() {
    			$(".jumbotron19").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide19b() {
    			$(".jumbotron19b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    			$('#exitButton').hide("explode",2000);
    		};

    		function showSlide20() {
    			$(".jumbotron20").show(1000).delay(8000).hide(1000);
    		};

    		function showSlide21() {
    			$(".jumbotron21").slideDown(2000);
    			$("#george").slideDown(2000).delay(40000).slideUp(2000);

    		};

    		function showSlide22() {
    			$(".jumbotron22").slideDown(1000);
 			
 			};

 			function hideSlide22() {
    			$(".jumbotron22").slideUp(1000);
 			
 			};

			function hideBlueCode() {
    			$("#blueCode").hide();
    		};

    		function showBlueCode() {
    			$("#blueCode").show(3000).delay(5000).hide(2000);
    		};

//more hidden html text
    		function hideOnlineResume(){
    			$("#onlineResume1").hide();
    			$("#onlineResume2").hide();
    			$("#onlineResume3").hide();
    			$("#onlineResume4").hide();
    		};

    		function hideGeorge() {
    			$("#george").hide();
    		};

    		function slideGeorge() {
    			$("#george").slideDown(2000).delay(40000).slideUp(2000);
			       
    		};

    		function hireMe(){
	    			$('#hire-me.jpg').show(3000);
	    		}

	    	function showResume1(){
	    			$("#onlineResume1").show(5000).delay(5000).hide(2000);
	    		}

	    	function showResume2(){
	    			$("#onlineResume2").show(4000).delay(6000).hide(2000);
	    			
	    		}

	    	function showResume3(){
	    			$("#onlineResume3").show(2000).delay(6000).hide(2000);
	    			showFinEng1();
	    		}

	    	function showResume4(){
	    			$("#onlineResume4").show(2000).delay(6000).hide(2000);
	    		}				

    		function showResume5(){
	    			$("#onlineResume5").show(2000).delay(7000).hide(4000);
	    		}	

//this is where it really all comes together, a long series of setTimeout functions which orchestra the entire site by calling all the previous functions in a set timeframe, all synched to Kid Rock.  	    		

	    		function bombSiren1(){
					setTimeout(kidRock, 500);
	    		}

	    		function kidRock(){
	    			getKidRock();
	    			setTimeout(bombSiren2, 500);
	    		}

	    		function bombSiren2(){
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
	    			setTimeout(intro10, 10000);
	    		}

	    		function intro10(){
	    			showSlide1();
	    			setTimeout(intro11, 5000);
	    		}

	    		function intro11(){
	    			showSlide2();
	    			setTimeout(intro12, 6000);
	    		}

	    		function intro12(){
	    			showSlide2b();
	    			setTimeout(intro13, 8000);
	    		}

	    		function intro13(){
	    			showSlide3();
	    			setTimeout(intro14, 9000);
	    		}

	    		function intro14(){
	    			showSlide4();
	    			setTimeout(intro15, 8000);
	    		}

	    		function intro15(){
	    			showSlide4b();
	    			setTimeout(intro16, 9000);
	    		}

	    		function intro16(){
	    			showSlide5();
	    			setTimeout(intro17, 9000);
	    		}

	    		function intro17(){
	    			showSlide5b();
	    			setTimeout(intro18, 9000);
	    		}

	    		function intro18(){
	    			showSlide6();
	    			setTimeout(intro19, 6000);
	    		}

	    		function intro19(){
	    			showSlide6b();
	    			setTimeout(intro20, 10000);
	    		}

	    		function intro20(){
	    			showSlide7();
	    			setTimeout(intro21, 5000);
	    		}

	    		function intro21(){
	    			showSlide8();
	    			setTimeout(intro22, 8000);
	    		}

	    		function intro22(){
	    			showSlide8b();
	    			setTimeout(intro23, 5000);
	    		}

	    		function intro23(){
	    			showSlide9();
	    			setTimeout(intro24, 12000);
	    		}

	    		function intro24(){
	    			showSlide10();
	    			setTimeout(intro25, 10000);
	    		}

	    		function intro25(){
	    			showSlide10b();
	    			setTimeout(intro28, 9000);
	    		}

	    		function intro28(){
	    			showSlide12();
	    			setTimeout(intro29, 6000);
	    		}

	    		function intro29(){
	    			showSlide13();
	    			setTimeout(intro30, 5000);
	    		}

	    		function intro30(){
	    			showSlide14();
	    			setTimeout(intro31, 9000);
	    		}

	    		function intro31(){
	    			showSlide15();
	    			setTimeout(intro33, 8000);
	    		}

	    		function intro33(){
	    			showSlide17();
	    			setTimeout(intro35, 8000);
	    		}


	    		function intro35(){
	    			showSlide19();
	    			setTimeout(intro36, 9000);
	    		}

	    		function intro36(){
	    			showSlide19b();
	    			setTimeout(intro37, 8000);
	    		}

	    		function intro37(){
	    			showSlide20();
	    			setTimeout(intro38, 10000);
	    		}

				function intro38(){
					showDifferent();
	    			setTimeout(intro39, 5000);
	    		}

					function intro39(){
	    			showLinks();
				}

//more hidden text and show functions			

	    		function hideCodingProblem1(){
	    			$('#codingProblem').hide("explode",2000);
	    			$('#codingProblem3').hide("explode",2000);
	    			$('#codingProblem5').hide("explode",2000);
	    			$('#codingProblem6').hide("explode",2000);
	    		}

				function hideCodingProblem2(){
	    			$('#codingProblem2').hide("explode",2000);
	    			$('#codingProblem4').hide("explode",2000);
	    		}

				function hideLinks(){
	    			$('#resume-show-button').hide();
	    			$('#portfolio').hide();
		    		$('#github').hide();
		    		$('#linkedin').hide();
		    		$('#home').hide();
    			}

	    		function showLinks(){
	    			$('#resume-show-button').slideDown(2000);
	    			$('#portfolio').slideDown(2000);
	    			$('#github').slideDown(2000);
	    			$('#linkedin').slideDown(2000);
	    			$('#home').slideDown(2000);
	    			$('#codeup').slideDown(2000);
				}

	    		function slideBlack(){
	    			$('#black').slideUp(35000);
	    		}

	    		function slideBlack2(){
	    			$('#black').slideUp(2000);
	    		}

				function enter1(){
	    			showResume1();
					setTimeout(enter2, 1000);
	    		}

	    		function enter2(){
	    			showBlueCode();
					setTimeout(enter3, 100);
	    		}

	    		function enter3(){
	    			showResume2();
					setTimeout(enter4, 8000);
	    		}

	    		function enter4(){
	    			showResume3();
					setTimeout(enter5, 8000);
	    		}

	    		function enter5(){
	    			showResume4();
	    			setTimeout(enter6, 3000);
	    			
	    		}

	    		function enter6(){
	    			showResume5();
	    		}

//beginning of JS execution

			$( document ).ready(function() {
					rotation();//rotates "hireme"

					$('#contact-button').click(function(){
						//clicking the "easy button" bypasses virt. resume
						$('#contact-button').hide("explode",2000);
						$('#start-button').hide("explode",2000);
        				$('#hireMe').hide("explode",2000);
        				$('#codingProblem').hide(2000);
        				$('#codingProblem5').hide(2000);
        				$('#codingProblem6').hide(2000);
        				$('#codingProblem3').hide(2000);
        				$('#codingProblem4').hide(2000);
        				$('#codingProblem2').hide(2000);
        				$('#recruiters1').hide("explode",2000);
        				$('#recruiters2').hide("explode",2000);
        				slideBlack2();
        				showLinks();

					});

	    			$('#start-button').click(function() {
	    				//starts the virtual resume
	    				$('#contact-button').hide("explode",2000);
	    				$('#recruiters1').hide("explode",2000);
        				$('#recruiters2').hide("explode",2000);
        				$('#start-button').hide("explode",2000);
        				$('#hireMe').hide("explode",2000);
        				$('#codingProblem').hide(2000);
        				$('#codingProblem5').hide(2000);
        				$('#codingProblem6').hide(2000);
        				$('#codingProblem3').hide(2000);
        				$('#codingProblem4').hide(2000);
        				$('#codingProblem2').hide(2000);
        					slideBlack();
        					bombSiren1();
        					enter1();
  						});

	    			$('#different').click(function() {
	    				//click the "diffferent pic" get Utube video
    					$('#different').hide("explode",1000);
						showSlide21();
						var title = $("#george").attr("src");
						title.replace("autoplay=0", "autoplay=1");
 					});

//resume click function drops down hard-copy of resume then slides back up
					$('#resume-show-button').click(function() {
						$(".jumbotron22").slideDown(2000);
 					});

 					$('#resume-hide-button').click(function() {
	    				$(".jumbotron22").slideUp(2000);
	    			}); 

	    			$('#resume-hide-button2').click(function() {
	    				$(".jumbotron22").slideUp(2000);
	    			}); 

    });    		

	</script><script>
//rotating "hire me" image animation
				var rotation = function (){
					   $("#hireMe").rotate({
					      angle:100, 
					      animateTo:1080, 
					      callback: rotation
					   });
					}

// global variables
				var title; 
				var ingy;
				var counter = 0;
				var t = 0;

// hidden images to .show() later using Jquery
				hideLinks();
				hideBlueCode();
				hideOnlineResume();
				hideFinEng1();
				$("#exitButton").hide();
				$("#slide").hide();
				$("#different").hide();
				$("#codeup").hide();
				$("#onlineResume5").hide();
				$(".jumbotron1").hide();
				$(".jumbotron2").hide();
				$(".jumbotron2b").hide();
				$(".jumbotron3").hide();
				$(".jumbotron4").hide();
				$(".jumbotron4b").hide();
				$(".jumbotron5").hide();
				$(".jumbotron5b").hide();
				$(".jumbotron6").hide();
				$(".jumbotron6b").hide();
				$(".jumbotron7").hide();
				$(".jumbotron8").hide();
				$(".jumbotron8b").hide();
				$(".jumbotron9").hide();
				$(".jumbotron10").hide();
				$(".jumbotron10b").hide();
				$(".jumbotron11").hide();
				$(".jumbotron11b").hide();
				$(".jumbotron12").hide();
				$(".jumbotron13").hide();
				$(".jumbotron14").hide();
				$(".jumbotron15").hide();
				$(".jumbotron16").hide();
				$(".jumbotron17").hide();
				$(".jumbotron18").hide();
				$(".jumbotron19").hide();
				$(".jumbotron19b").hide();
				$(".jumbotron20").hide();
				$(".jumbotron21").hide();
				$(".jumbotron22").hide();

//beginning of exploding icon functions
			function getshortI(){

	    			$("<img id='theMole' class='mole' src='I.png'  alt='whack-a-mole'>").appendTo("#" + 1).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortN(){

	    			$("<img id='theMole' class='mole' src='n.png'  alt='whack-a-mole'>").appendTo("#" + 2).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortG(){

	    			$("<img id='theMole' class='mole' src='g.png'  alt='whack-a-mole'>").appendTo("#" + 3).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortY(){

	    			$("<img id='theMole' class='mole' src='superY.jpeg'  alt='whack-a-mole'>").appendTo("#" + 4).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortT(){

	    			$("<img id='theMole' class='mole' src='ttt.png'  alt='whack-a-mole'>").appendTo("#" + 5).show(39700).delay(5000).hide("explode",2000);
	    			};

	  
			function getshortFirstR(){

	    			$("<img id='theMole' class='mole' src='letterr.png'  alt='whack-a-mole'>").appendTo("#" + 6).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortA(){

	    			$("<img id='theMole' class='mole' src='a.png'  alt='whack-a-mole'>").appendTo("#" + 7).show(39700).delay(5000).hide("explode",2000);
	    			};

			function getshortD(){

	    			$("<img id='theMole' class='mole' src='greenround.png'  alt='whack-a-mole'>").appendTo("#" + 8).show(39700).delay(5000).hide("explode",2000);
	    			};

	    	function getshortE(){

	    			$("<img id='theMole' class='mole' src='lettere.jpeg'  alt='whack-a-mole'>").appendTo("#" + 9).show(39700).delay(5000).hide("explode",2000);
	    			};									

	    	function getshortR(){

	    			$("<img id='theMole' class='mole' src='r.png'  alt='whack-a-mole'>").appendTo("#" + 10).show(39700).delay(5000).hide("explode",2000);
	    			};

			function getI(){

	    			$("<img id='theMole' class='mole' src='I.png'  alt='whack-a-mole'>").appendTo("#" + 1).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getN(){

	    			$("<img id='theMole' class='mole' src='n.png'  alt='whack-a-mole'>").appendTo("#" + 2).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getG(){

	    			$("<img id='theMole' class='mole' src='g.png'  alt='whack-a-mole'>").appendTo("#" + 3).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode", Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getY(){

	    			$("<img id='theMole' class='mole' src='superY.jpeg'  alt='whack-a-mole'>").appendTo("#" + 4).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getT(){

	    			$("<img id='theMole' class='mole' src='ttt.png'  alt='whack-a-mole'>").appendTo("#" + 5).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

			function getFirstR(){

	    			$("<img id='theMole' class='mole' src='letterr.png'  alt='whack-a-mole'>").appendTo("#" + 6).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getA(){

	    			$("<img id='theMole' class='mole' src='a.png'  alt='whack-a-mole'>").appendTo("#" + 7).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

			function getD(){

	    			$("<img id='theMole' class='mole' src='greenround.png'  alt='whack-a-mole'>").appendTo("#" + 8).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getE(){

	    			$("<img id='theMole' class='mole' src='lettere.jpeg'  alt='whack-a-mole'>").appendTo("#" + 9).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

	    	function getR(){
	    			$("<img id='theMole' class='mole' src='r.png'  alt='whack-a-mole'>").appendTo("#" + 10).show(Math.floor(Math.random() * 5000) + 1000).delay(Math.floor(Math.random() * 5000) + 1000).hide("explode",Math.floor(Math.random() * 5000) + 1000);
	    			};

//function calls all explosion functions together, and counts iterations to set the interval length. 
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

						if(counter == 175) {
						   clearInterval(ingy);
						}
	    		};


//launches ingytrader with its own interval time
	    		function ingyTraderLaunch(){
					ingy = setInterval(ingyTrader, 1000);
	    		}


//function for 8 correographed explosions at beginning of song  
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

//jquery is very usefull for animation, but the more functions you seperate things into, the more flexible and create you can be. 

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

    		function hideFinEng1(){
    			$("#finEng1").hide();
    		}

    		function showFinEng1() {
    			$("#finEng1").show(2000).delay(6000).hide(2000);
    		};

    		function showDifferent() {
    			$("#different").show();
    		};


//beginning of slideshow functions, show, hide, delay, toggle etc
    	
    		function showSlide1() {
    			$("#exitButton").show();
    			$(".jumbotron1").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide2() {
    			$(".jumbotron2").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide2b() {
    			$(".jumbotron2b").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};


    		function showSlide3() {
    			$(".jumbotron3").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide4() {
    			$(".jumbotron4").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide4b() {
    			$(".jumbotron4b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide5() {
    			$(".jumbotron5").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide5b() {
    			$(".jumbotron5b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide6() {
    			$(".jumbotron6").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide6b() {
    			$(".jumbotron6b").toggle("slide", 1000).delay(7000).toggle("pulsate", 1000);
    		};

    		function showSlide7() {
    			$(".jumbotron7").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide8() {
    			$(".jumbotron8").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide8b() {
    			$(".jumbotron8b").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide9() {
    			$(".jumbotron9").toggle("slide", 1000).delay(9000).toggle("pulsate", 1000);
    		};

    		function showSlide10() {
    			$(".jumbotron10").toggle("slide", 1000).delay(7000).toggle("pulsate", 1000);
    		};

    		function showSlide10b() {
    			$(".jumbotron10b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide11() {
    			$(".jumbotron11").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};


    		function showSlide11b() {
    			$(".jumbotron11b").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide12() {
    			$(".jumbotron12").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide13() {
    			$(".jumbotron13").toggle("slide", 1000).delay(2000).toggle("pulsate", 1000);
    		};

    		function showSlide14() {
    			$(".jumbotron14").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide15() {
    			$(".jumbotron15").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide16() {
    			$(".jumbotron16").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide17() {
    			$(".jumbotron17").toggle("slide", 1000).delay(5000).toggle("pulsate", 1000);
    		};

    		function showSlide18() {
    			$(".jumbotron18").toggle("slide", 1000).delay(3000).toggle("pulsate", 1000);
    		};

    		function showSlide19() {
    			$(".jumbotron19").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    		};

    		function showSlide19b() {
    			$(".jumbotron19b").toggle("slide", 1000).delay(6000).toggle("pulsate", 1000);
    			$('#exitButton').hide("explode",2000);
    		};

    		function showSlide20() {
    			$(".jumbotron20").show(1000).delay(8000).hide(1000);
    		};

    		function showSlide21() {
    			$(".jumbotron21").slideDown(2000);
    			$("#george").slideDown(2000).delay(40000).slideUp(2000);

    		};

    		function showSlide22() {
    			$(".jumbotron22").slideDown(1000);
 			
 			};

 			function hideSlide22() {
    			$(".jumbotron22").slideUp(1000);
 			
 			};

			function hideBlueCode() {
    			$("#blueCode").hide();
    		};

    		function showBlueCode() {
    			$("#blueCode").show(3000).delay(5000).hide(2000);
    		};

//more hidden html text
    		function hideOnlineResume(){
    			$("#onlineResume1").hide();
    			$("#onlineResume2").hide();
    			$("#onlineResume3").hide();
    			$("#onlineResume4").hide();
    		};

    		function hideGeorge() {
    			$("#george").hide();
    		};

    		function slideGeorge() {
    			$("#george").slideDown(2000).delay(40000).slideUp(2000);
			       
    		};

    		function hireMe(){
	    			$('#hire-me.jpg').show(3000);
	    		}

	    	function showResume1(){
	    			$("#onlineResume1").show(5000).delay(5000).hide(2000);
	    		}

	    	function showResume2(){
	    			$("#onlineResume2").show(4000).delay(6000).hide(2000);
	    			
	    		}

	    	function showResume3(){
	    			$("#onlineResume3").show(2000).delay(6000).hide(2000);
	    			showFinEng1();
	    		}

	    	function showResume4(){
	    			$("#onlineResume4").show(2000).delay(6000).hide(2000);
	    		}				

    		function showResume5(){
	    			$("#onlineResume5").show(2000).delay(7000).hide(4000);
	    		}	

//this is where it really all comes together, a long series of setTimeout functions which orchestra the entire site by calling all the previous functions in a set timeframe, all synched to Kid Rock.  	    		

	    		function bombSiren1(){
					setTimeout(kidRock, 500);
	    		}

	    		function kidRock(){
	    			getKidRock();
	    			setTimeout(bombSiren2, 500);
	    		}

	    		function bombSiren2(){
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
	    			setTimeout(intro10, 10000);
	    		}

	    		function intro10(){
	    			showSlide1();
	    			setTimeout(intro11, 5000);
	    		}

	    		function intro11(){
	    			showSlide2();
	    			setTimeout(intro12, 6000);
	    		}

	    		function intro12(){
	    			showSlide2b();
	    			setTimeout(intro13, 8000);
	    		}

	    		function intro13(){
	    			showSlide3();
	    			setTimeout(intro14, 9000);
	    		}

	    		function intro14(){
	    			showSlide4();
	    			setTimeout(intro15, 8000);
	    		}

	    		function intro15(){
	    			showSlide4b();
	    			setTimeout(intro16, 9000);
	    		}

	    		function intro16(){
	    			showSlide5();
	    			setTimeout(intro17, 9000);
	    		}

	    		function intro17(){
	    			showSlide5b();
	    			setTimeout(intro18, 9000);
	    		}

	    		function intro18(){
	    			showSlide6();
	    			setTimeout(intro19, 6000);
	    		}

	    		function intro19(){
	    			showSlide6b();
	    			setTimeout(intro20, 10000);
	    		}

	    		function intro20(){
	    			showSlide7();
	    			setTimeout(intro21, 5000);
	    		}

	    		function intro21(){
	    			showSlide8();
	    			setTimeout(intro22, 8000);
	    		}

	    		function intro22(){
	    			showSlide8b();
	    			setTimeout(intro23, 5000);
	    		}

	    		function intro23(){
	    			showSlide9();
	    			setTimeout(intro24, 12000);
	    		}

	    		function intro24(){
	    			showSlide10();
	    			setTimeout(intro25, 10000);
	    		}

	    		function intro25(){
	    			showSlide10b();
	    			setTimeout(intro28, 9000);
	    		}

	    		function intro28(){
	    			showSlide12();
	    			setTimeout(intro29, 6000);
	    		}

	    		function intro29(){
	    			showSlide13();
	    			setTimeout(intro30, 5000);
	    		}

	    		function intro30(){
	    			showSlide14();
	    			setTimeout(intro31, 9000);
	    		}

	    		function intro31(){
	    			showSlide15();
	    			setTimeout(intro33, 8000);
	    		}

	    		function intro33(){
	    			showSlide17();
	    			setTimeout(intro35, 8000);
	    		}


	    		function intro35(){
	    			showSlide19();
	    			setTimeout(intro36, 9000);
	    		}

	    		function intro36(){
	    			showSlide19b();
	    			setTimeout(intro37, 8000);
	    		}

	    		function intro37(){
	    			showSlide20();
	    			setTimeout(intro38, 10000);
	    		}

				function intro38(){
					showDifferent();
	    			setTimeout(intro39, 5000);
	    		}

					function intro39(){
	    			showLinks();
				}

//more hidden text and show functions			

	    		function hideCodingProblem1(){
	    			$('#codingProblem').hide("explode",2000);
	    			$('#codingProblem3').hide("explode",2000);
	    			$('#codingProblem5').hide("explode",2000);
	    			$('#codingProblem6').hide("explode",2000);
	    		}

				function hideCodingProblem2(){
	    			$('#codingProblem2').hide("explode",2000);
	    			$('#codingProblem4').hide("explode",2000);
	    		}

				function hideLinks(){
	    			$('#resume-show-button').hide();
	    			$('#portfolio').hide();
		    		$('#github').hide();
		    		$('#linkedin').hide();
		    		$('#home').hide();
    			}

	    		function showLinks(){
	    			$('#resume-show-button').slideDown(2000);
	    			$('#portfolio').slideDown(2000);
	    			$('#github').slideDown(2000);
	    			$('#linkedin').slideDown(2000);
	    			$('#home').slideDown(2000);
	    			$('#codeup').slideDown(2000);
				}

	    		function slideBlack(){
	    			$('#black').slideUp(35000);
	    		}

	    		function slideBlack2(){
	    			$('#black').slideUp(2000);
	    		}

				function enter1(){
	    			showResume1();
					setTimeout(enter2, 1000);
	    		}

	    		function enter2(){
	    			showBlueCode();
					setTimeout(enter3, 100);
	    		}

	    		function enter3(){
	    			showResume2();
					setTimeout(enter4, 8000);
	    		}

	    		function enter4(){
	    			showResume3();
					setTimeout(enter5, 8000);
	    		}

	    		function enter5(){
	    			showResume4();
	    			setTimeout(enter6, 3000);
	    			
	    		}

	    		function enter6(){
	    			showResume5();
	    		}

//beginning of JS execution

			$( document ).ready(function() {
					rotation();//rotates "hireme"

					$('#contact-button').click(function(){
						//clicking the "easy button" bypasses virt. resume
						$('#contact-button').hide("explode",2000);
						$('#start-button').hide("explode",2000);
        				$('#hireMe').hide("explode",2000);
        				$('#codingProblem').hide(2000);
        				$('#codingProblem5').hide(2000);
        				$('#codingProblem6').hide(2000);
        				$('#codingProblem3').hide(2000);
        				$('#codingProblem4').hide(2000);
        				$('#codingProblem2').hide(2000);
        				$('#recruiters1').hide("explode",2000);
        				$('#recruiters2').hide("explode",2000);
        				slideBlack2();
        				showLinks();

					});

	    			$('#start-button').click(function() {
	    				//starts the virtual resume
	    				$('#contact-button').hide("explode",2000);
	    				$('#recruiters1').hide("explode",2000);
        				$('#recruiters2').hide("explode",2000);
        				$('#start-button').hide("explode",2000);
        				$('#hireMe').hide("explode",2000);
        				$('#codingProblem').hide(2000);
        				$('#codingProblem5').hide(2000);
        				$('#codingProblem6').hide(2000);
        				$('#codingProblem3').hide(2000);
        				$('#codingProblem4').hide(2000);
        				$('#codingProblem2').hide(2000);
        					slideBlack();
        					bombSiren1();
        					enter1();
  						});

	    			$('#different').click(function() {
	    				//click the "diffferent pic" get Utube video
    					$('#different').hide("explode",1000);
						showSlide21();
						var title = $("#george").attr("src");
						title.replace("autoplay=0", "autoplay=1");
 					});

//resume click function drops down hard-copy of resume then slides back up
					$('#resume-show-button').click(function() {
						$(".jumbotron22").slideDown(2000);
 					});

 					$('#resume-hide-button').click(function() {
	    				$(".jumbotron22").slideUp(2000);
	    			}); 

	    			$('#resume-hide-button2').click(function() {
	    				$(".jumbotron22").slideUp(2000);
	    			}); 

    });    		
</script>