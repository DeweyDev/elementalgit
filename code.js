// Hide everything but the homepage div (the homepage)

	$('.everythingButHomepage').hide();


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
	
	$('#quizModeButton').click(function(){

		$('#menuDiv').hide('slow');
		$('#quizModeDiv').show('slow');
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

		$('#answerCheckerModal').modal('show');

		/*...SET RANDOM NUMBER SEQUENCE HERE...*/

			var randomSetCounter;
			//var arrayOfRandom[14];

			/*
			for(randomSetCounter = 0; randomSetCounter < 15; randomSetCounter++){

				arrayOfRandom[randomSetCounter] = GENERATED_RANDOM_NUMBER;

			}
			*/

		/*...SET UP FIRST QUESTION DIV...*/

		


	}


/*===================CHALLENGE MODE LOGIC======================*/