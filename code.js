// Hide everything but the homepage div (the homepage)

	$('.everythingButHomepage').hide();

// Set up the homepage div and the menu div transition function

	$('#homepageButton').click(function(){

		$("#menuDiv").hide();
		$("#homepageDiv").show();

	});

	$('#playButton').click(function(){
		
		$("#homepageDiv").hide();
		$("#menuDiv").show();
		
	});

/*===================MENU LOGIC======================*/
	
	$('#quizModeButton').click(function(){

		$('#menuDiv').hide();
		$('#quizModeDiv').show();
		setUpQuiz();

	});
	
	$('#challengeModeButton').click(function(){

		$('#menuDiv').hide();
		$('#challengeModeDiv').show();
		
	});
	
	$('#bonusModeButton').click(function(){

		$('#menuDiv').hide();
		$('#bonusModeDiv').show();
		
	});

/*===================QUIZ MODE LOGIC======================*/

	function setUpQuiz(){

		/*...SET RANDOM NUMBER SEQUENCE HERE...*/

			var randomSetCounter;
			var arrayOfRandom[14];

			/*
			for(randomSetCounter = 0; randomSetCounter < 15; randomSetCounter++){

				arrayOfRandom[randomSetCounter] = GENERATED_RANDOM_NUMBER;

			}
			*/

		/*...SET UP FIRST QUESTION DIV...*/

		


	}


/*===================CHALLENGE MODE LOGIC======================*/