// Hide everything but the homepage div (the homepage) (also hide all the quiz questions) Set up global variables

	$('.everythingButHomepage').hide();
	$('.quizQuestions').hide();
	
	var arrayLoopingVar = 0;
	var correctScore = 0;
	var wrongScore = 0;

// Set up the homepage div and the menu div transition function

	$('#homepageButton').click(function(){

		$(".everythingButHomepage").hide('slow');
		$("#menuDiv").hide('slow');
		$("#homepageDiv").show('slow');
		$('#advertisements').show('slow');
		$('#authors').show('slow');

	});

	$('#playButton').click(function(){
		
		$("#homepageDiv").hide('slow');
		$("#menuDiv").show('slow');
		$('#advertisements').hide('slow');
		$('#authors').hide('slow');
		
	});

/*===================MENU LOGIC======================*/
	
	$('#quizModeButton').unbind('click').click(function(){

		$('#menuDiv').hide('slow');
		$('#quizModeDiv').show('slow');

		// Hide the open questions

		$(".quizQuestions").hide();

		setUpQuiz();

	});
	
	$('#challengeModeButton').click(function(){

		$('#menuDiv').hide('slow');
		$('#challengeModeDiv').show('slow');
		
	});
	
	$('#bonusModeButton').click(function(){

		$('#menuDiv').hide('slow');
		$('#bonusModeDiv').show('slow');
		
	});

/*===================QUIZ MODE LOGIC======================*/

	function setUpQuiz(){

		/* Set up periodic table reference */


		$('#periodicTableButton').unbind('click').click(function(){
			
			$('#periodicTableModal').modal('show').css({'width': '1000px','margin-left': function () {return -($(this).width() / 2);}});

		});

		/*...SET RANDOM NUMBER SEQUENCE HERE AND LOG IT...*/
		
		$.get('http://www.random.org/sequences/?min=1&max=20&col=1&format=plain&rnd=new', function(data) {
				  
			mainstream(data.split("\n"));	
			console.log(data.split("\n"));
			  	
		});

	}
	
	function mainstream(numRanSequenceBank){

		if(numRanSequenceBank[arrayLoopingVar] == ""){
			$("#quizModeDiv").append("<div><h2>Number Correct: " + correctScore + "</h2>" + "<h2>Number Wrong: " + wrongScore +"</h2></div>");
		}

		// Show the current question

		$("#" + numRanSequenceBank[arrayLoopingVar]).show('slow');

		$(".answerChoices").unbind("click").click(function(){


			// Check to see if the answer is right or wrong

				if($(this).hasClass('correctAnswer')){

					$('#answerCheckerModalTitle').text("Correct!");

					// Make the popup show
					$('#answerCheckerModal').modal('show');
					$('#answerCheckerModalBody').html('');

					// Increment score counter

					correctScore++;
					$("#" + numRanSequenceBank[arrayLoopingVar]).hide('slow');
					arrayLoopingVar++;
					mainstream(numRanSequenceBank);

				}

				if($(this).hasClass('wrongAnswer')){

					
					$('#answerCheckerModalTitle').text("Wrong!");

					// Make the popup show
					$('#answerCheckerModal').modal('show');

					// Increment score counter

					wrongScore++;
					$("#" + numRanSequenceBank[arrayLoopingVar]).hide('slow');
					arrayLoopingVar++;	
					mainstream(numRanSequenceBank);

				}

		});

		

	}


