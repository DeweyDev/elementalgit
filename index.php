<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Elemental-Git
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Le styles -->
  <link href="http://bootswatch.com/united/bootstrap.min.css" rel="stylesheet">
  <style>
      body { padding-top: 60px; /* 60px to make the container go all the way
      to the bottom of the topbar */ }
      .popover{
        position: absolute;
      }
      </style>
      <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
      <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
      <![endif]-->
      <!-- Le fav and touch icons -->
      <link rel="shortcut icon" href="assets/ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
      <style>
      </style>
    </head>
    <body>
      <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner" style="background-color: #d44413;">
          <div class="container">
            <a id="homepageButton"class="brand" href="index.html">
              Elemental-Git
            </a>
            <ul class="nav">
              <li>
                <a href="#" id="homepageButton2">
                  Home
                </a>
              </li>
              <li>
                <a id="aboutButton" href="#">
                  About
                </a>
              </li>
              <li>
                <a href="mailto:esumsroboticsteam@gmail.com">
                  Contact
                </a>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input name="textinput1" type="email" placeholder="Email" class="span2">
              <input name="textinput2" type="password" placeholder="Password" class="span2">
              <button class="btn">
                Sign in
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="container">
        <div id="homepageDiv"class="hero-unit">
          <img src="https://lh3.googleusercontent.com/-jRTsUt6HeG8/UUuJMvjBwlI/AAAAAAAAB9k/s5R3t2CapJ8/w515-h524-p-o-k/beaker.PNG" style="
          float: right;
          height: 200px;
          ">
          <div>
            <h1>
              Elemental-Git
            </h1>
            <p>
              A Game About Elements... 
            </p>

          </div>
          <a id="playButton"class="btn btn-info btn-large" href="#">
            Play Now »
          </a>

        </div>

        <div class="row" id="advertisements">
          <div class="span4">
            <div>
              <h2>
                Open-Source
              </h2>
              <p>
                A repository with the Source Code is available on GitHub.
              </p>
            </div>
            <a class="btn" href="https://github.com/DeweyDev/elementalgit">
              Source »
            </a>
          </div>
          <div class="span4">
            <div>
              <h2>
                Perfect for Students
              </h2>
              <p>
                Review important chemistry conceps in an engaging way.
              </p>
            </div>
            <a class="btn" href="mailto:new.joseph10@gmail.com">
              Purchase »
            </a>
          </div>
          <div class="span4">
            <div>
              <h2>
                Beta Version
              </h2>
              <p>
                This game is currently in open-beta.
              </p>
            </div>
            <a class="btn" id="aboutButton2">
              View details »
            </a>
          </div>
        </div>

        <div id="authors">
          © DeweyDev 2012
        </div>


        <div id="aboutDiv" class="hero-unit everythingButHomepage">
            <h1>
              About Elemental-Git
            </h1>
            <p>
              Elemental Git is a game to help first-year chemistry students to review and learn concepts about the Priodic Table and elements.  Take a quiz to review before a test, or challenge yourself to completely fill in a blank Periodic Table with all of the correct elements.
              <Br><Br>
              If you enjoy Elemental Git, please consider making a small financial contribution to the developers.  We like to keep Elemental Git open source, but free tools are hard to come by.
              <Br><Br>
              If you want to save and track your pogress, log in above.
            </p>
            <p style="text-align: center;">
              <img src="https://a248.e.akamai.net/camo.github.com/1bf181efc4990b2eb6e4e5bab121ae53cdf1db0a/687474703a2f2f7777772e636c6b65722e636f6d2f636c6970617274732f372f392f302f392f31323835393633343636323037373130363730336c616e6725323067616e672532306f72616e67653a6c6172616e6a612d68692e706e67"></img>
            </p>

          </div>






        <div id="menuDiv"class="hero-unit everythingButHomepage">
          <div>
            <h1>
              Menu
            </h1>
            <p>
              Select a Game Mode ...
            </p>
          </div>
          <a id="quizModeButton" class="btn btn-success btn-large" >Quiz Mode</a>
          <a id="challengeModeButton" class="btn btn-danger btn-large" >Challenge Mode</a>
          <a id="bonusModeButton"class="btn btn-warning btn-large" >Bonus Mode</a>
        </div>

        


        <div id="quizModeDiv"class="hero-unit everythingButHomepage">
          <div>
            <h1>
              Quiz Mode
            </h1>
          </div>

          <!--BEGIN QUIZ QUESTIONS! -->
           

           <div id="1" class= "quizQuestions">

            <h2>
              What class of elements makes up the majority of the Periodic Table?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">Metalloids</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Nonmetals</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">Metals</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Noble Gases</input><BR>
            </p>
            <div id="explanation1" class="explanationDiv">The major class of elements on the Periodic Table is the class of metals.  The F-Block and the D-Block are all composed of metals, in addition to the majority of the S-Block.  Only a few elements are metalloids or semi-metals, and only about half of the P-Block are nonmetals.  The Noble Gases are a group of elements rather than a class.
              <img href="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSiDpeQ9Qw6iOPHJTWwwO0aQ6-Bi6u5Lyp5xmGBuhB8VcQkHiv3WQ"/></div>
           </div>
           
           <div id="2" class= "quizQuestions">
            <h2>
              If the atomic number of Titanium is 22, how many protons does it have?
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">22</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">11</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">44</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Not enough information</input><BR>
            </p>
            <div id="explanation2" class="explanationDiv">Atomic number signifies the number of protons.  Therefore, if Titanium's atomic number is 22, the number of protons in Titanium will also be 22.  Atomic mass, on the other hand, is the weighted average of all of the combinations of protons and neutrons in an element.
              <img href="http://www.bcscience.com/bc9/images/0_quiz_element.gif"/></div>
           </div>
           
           <div id="3" class= "quizQuestions">
            <h2>
              How many protons and neutrons does Argon-40 have?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">40 protons and 0 neutrons</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">40 protons and 40 neutrons</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">20 protons and 20 neutrons</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">18 protons and 22 neutrons</input><BR>
            </p>
            <div id="explanation3" class="explanationDiv">"Argon-40" is in the form of isotope notation.  Isotope notation is where the isotope's name is followed by its atomic mass, or combination of protons and neutrons.  Therefore, since Argon's atomic number is 18 (see Periodic Table), if its mass is 40, it will have 18 protons and 22 neutrons.</div>
           </div>
           
           <div id="4" class= "quizQuestions">
            <h2>
              What is the valence electron configuration of Silver? (Hint: Silver is an exception)
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">[Kr] 5s1 4d10</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s2 4d9</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">[Kr] 5s2 4d9</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">1s2 2s2 2p6 3s2 3p6 4s2 3d10 4p6 5s1 4d10</input><BR>
            </p>
            <div id="explanation4" class="explanationDiv">Valence electron configuration is different from ordinary electron configuration because the noble gas preceding the element in question is placed before the configuration for the period of the element only. In other words, only the configuration for the row that an element is in is shown, and the atomic symbol of the noble gas that comes before it precedes this configuration.
            Furthermore, Silver is in the 9th position in the D-Block, so it wants an extra electron in its 4d position.  It will take this from the 5s energy level.<iframe width="560" height="315" src="http://www.youtube.com/embed/1TZA171yxY4?rel=0" frameborder="0" allowfullscreen></iframe></div>
           </div>
           
           <div id="5" class= "quizQuestions">
            <h2>
              How many valence electrons does an unbonded atom of Aluminum have? (Hint: Aluminum's atomic number is 13)
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">1</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">5</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">13</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">3</input><BR>
            </p>

            <div id="explanation5" class="explanationDiv">The number of valence electrons is the number of electrons in the outermost energy level.  Therefore, Aluminum, which ordinarily has 13 electrons, will have 2 in its first energy level, 8 in its second, and 3 left over in its valence energy level.</div>
           </div>

           <div id="6" class= "quizQuestions">
            <h2>
              What group or column on the periodic table is least likely to form bonds?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">Lanthanides</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Halogens</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">Noble Gases</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Actinides</input><BR>
            </p>
            <div id="explanation6" class="explanationDiv">The Noble Gases represent the picture of happiness for elements.  Fulfilling the Octet rule, Noble Gases have full outer shells, which is the desire of every other element.  Elements form bonds in order to give away or take electrons in order to have a total of 8 in their outer shell.  They try to get closer to the full outer shell that the 8th group on the Periodic Table has, making this elite and "happy" group of elements very "noble"--every other element wants to be like them.</div>
           </div>

           <div id="7" class= "quizQuestions">
            <h2>
              Which Lewis Dot Structure below correctly represents Carbon Dioxide?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio"><img src="https://lh4.googleusercontent.com/-oVp-q0Lusbo/UU9yoLMGThI/AAAAAAAAAy8/VIg7MXSI1dk/s101/wrong3.JPG"/></input><BR><BR>
                <input class = "answerChoices wrongAnswer" type="radio"><img src="https://lh3.googleusercontent.com/-IlV1hs5AUKo/UU9ynl37k4I/AAAAAAAAAzA/VfXll3CiARA/s101/wrong2.JPG"/></input><BR><BR>
                <input class = "answerChoices wrongAnswer" type="radio"><img src="https://lh5.googleusercontent.com/-yaB4AydYuDw/UU9ynq_NwsI/AAAAAAAAAzE/nU5STW7lTtI/s101/wrong1.JPG"/></input><BR><BR>
                <input class = "answerChoices correctAnswer" type="radio"><img src="https://lh6.googleusercontent.com/-6J-08LLPIdg/UU9ynphIvOI/AAAAAAAAAy4/fJwRkhToyJc/s101/correct.JPG"/></input><BR><BR>
            </p>
            <div id="explanation7" class="explanationDiv">When drawing Lewis Dot Structures, dots are drawn clockwise around an element's symbol representing that element's valence electrons.  Then, when making bonds, elements try to have all valence electrons either paired or bonded.  Bonds are represented by lines connecting two elements depending on how many electrons are shared or taken and pairs of elements are retained in each element's symbol to show the nature of the bond.</div>
           </div>

           <div id="8" class= "quizQuestions">
            <h2>
              Why is the first group or column of elements on the periodic table the most reactive?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">They have the most protons</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">They have the least neutrons</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">They each have only one valence electron</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">They each can form four bonds</input><BR>
            </p>
            <div id="explanation8" class="explanationDiv">The first group, the Alkali Earth Metals, are the most reactive because each element in the group only has one valence electron.  They want to get rid of this one electron, and it is very easy for them to do so since they only have one, so they will bond quickly and seamlessly.  This is the essense of reactivity.</div>
           </div>

           <div id="9" class= "quizQuestions">
            <h2>
              What element is most commonly found in the sun?
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">Hydrogen</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Helium</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Oxygen</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Nitrogen</input><BR>
            </p>
            <div id="explanation9" class="explanationDiv">Hydrogen is the most abundant material in the sun.  Because of the massive amounts of energy contained within the sun, it has the ability to split atoms through fission and individual helium atoms are frequently split into hydrogen atoms.  This in turn generates immensely more energy.  Helium, oxygen, and nitrogen are all found on the sun, however, hydrogen is the most abundant.</div>
           </div>

           <div id="10" class= "quizQuestions">
            <h2>
              Which of the following is NOT radioactive?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">Technetium</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Uranium</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">Lead</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Nobelium</input><BR>
            </p>
            <div id="explanation10" class="explanationDiv">Technetium, although it is a metal in the D block, is radioactive.  Uranium is radioactive, and is commonly used in generating nuclear power.  Nobelium, towards the end of the F block, is radioactive along with many of its neighbors.  Among these choices only lead, a metal, is not radioactive.</div>
           </div>

           <div id="11" class= "quizQuestions">
            <h2>
              What is the relationship between electronegativity and ionization energy?
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">Electronegativity is an atom's hungriness for electrons, ionization energy is the energy it requires to take an electron from an atom</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Electronegativity is the energy it requires to take an electron from an atom, ionization energy is an atom's hungriness for electrons</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Electronegativity is how reactive an element is, ionization energy is the energy it requires to take an electron from an atom</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Electronegativity is an atom's hungriness for electrons, ionization energy is how reactive an element is</input><BR>
            </p>
            <div id="explanation11" class="explanationDiv">Explain11</div>
           </div>

           <div id="12" class= "quizQuestions">
            <h2>
              Which of the following is NOT true about an isotope?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">All elements form isotopes</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">The average of all isotopes' mass and their relative abundance found in nature is equal to the average atomic mass found on the Periodic Table</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Isotopes have the same number of protons and different numbers of neutrons</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">Isotopes are either positively or negatively charged.</input><BR>
            </p>
            <div id="explanation12" class="explanationDiv">An isotope is an atom of an element that has more or less neutrons than another.  An atom's mass, since it is determined by adding the number of protons and neutrons, varies based on the number of neutrons; and the average atomic mass is a weighted mass of all of the isotopes found in nature.  Since isotopes are only losing or gaining neutrons, their number of protons and electrons, which ARE charged, remain the same, and thus there is no charge created.</div>
           </div>

           <div id="13" class= "quizQuestions">
            <h2>
              Which of the following is the correct order, <strong>from smallest to largest</strong>, of the atomic particles?
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">Neutrons/Protons, Electrons</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">Electrons, Protons/Neutrons</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Protons, Electrons, Neutrons</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Neutrons, Electrons, Protons</input><BR>
            </p>
            <div id="explanation13" class="explanationDiv">Electrons, which orbit the nucleus, are the smallest atomic particles.  Neutrons and protons are thought to have the same size or mass, so their order does not matter.</div>
           </div>

           <div id="14" class= "quizQuestions">
            <h2>
              Match this definition with the correct term: "A covalently bonded carbon chain with many units"
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">Monomer</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">Polymer</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Molecule</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Compound</input><BR>
            </p>
            <div id="explanation14" class="explanationDiv"><img href="http://plastics.americanchemistry.com/Education-Resources/Hands-on-Plastics/Introduction-to-Plastics-Science-Teaching-Resources/Syscom.GM.Web.Content.axd?d=Q8Zw%2BVg2Bds1"/><B>This diagram shows the basic structure of a polymer, which illustrates the definition.</div>
           </div>

           <div id="15" class= "quizQuestions">
            <h2>
              What is the difference between a cation and an anion?
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">A cation is positive, an anion is negative</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">An anion is positive, a cation is negative</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">A cation is larger than an anion</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">An anion is larger than a cation</input><BR>
            </p>
            <div id="explanation15" class="explanationDiv">A cation loses one or more electrons and becomes positive.  An anion gains one or more electrons and becomes negative.</div>
           </div>

           <div id="16" class= "quizQuestions">
            <h2>
              Which of the following compounds is ionic?
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">Sodium Chloride</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Water</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Hydrochloric Acid</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Nitrogen Monoxide</input><BR>
            </p>
            <div id="explanation16" class="explanationDiv">An ionic compound is between a metal and a nonmetal.  Sodium is the only metal in this list.  It is bonded with chloride, a nonmetal.  All of these other compounds are between nonmetals, making them covalent.</div>
           </div>

           <div id="17" class= "quizQuestions">
            <h2>
              Which of the following is most electronegative?
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">Carbon</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Neon</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Helium</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Sodium</input><BR>
            </p>
            <div id="explanation17" class="explanationDiv">Electronegativity is an atom's "hungriness" for electrons.  Electronegativity increases as period number decreases and group number increases.  The most electronegative element here is carbon, since it is farthest towards the top left.  Helium is not the most electronegative.  It only has a full S energy level, so it is not as electronegative.</div>
           </div>

           <div id="18" class= "quizQuestions">
            <h2>
              Atomic radius decreases as group number increases because
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">there are less neutrons, which makes the atom smaller.</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">there are more electrons and protons, so they have a tighter pull on each other.</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">there are less energy levels, which means the atoms are smaller.</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">atomic mass decreases.</input><BR>
            </p>
            <div id="explanation18" class="explanationDiv">Explain18</div>
           </div>

           <div id="19" class= "quizQuestions">
            <h2>
              The following is a description of what rule or law in chemistry? "Atoms tend to gain or lose electrons in order to attain a full valence shell and the stability a full valence shell imparts."
            </h2>
            <p>
                <input class = "answerChoices wrongAnswer" type="radio">The Noble Gas rule</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">The Electron rule</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">The Outer Shell rule</input><BR>
                <input class = "answerChoices correctAnswer" type="radio">The Octet rule</input><BR>
            </p>
            <div id="explanation19" class="explanationDiv">Explain19</div>
           </div>

           <div id="20" class= "quizQuestions">
            <h2>
              Which of these scientists is considered the father of the Periodic Table of the Elements?
            </h2>
            <p>
                <input class = "answerChoices correctAnswer" type="radio">Dimitri Mendeleev</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Albert Einstein</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Niels Bohr</input><BR>
                <input class = "answerChoices wrongAnswer" type="radio">Aristotle</input><BR>
            </p>
            <div id="explanation20" class="explanationDiv">Explain20</div>
           </div>

      

           <!--END QUIZ QUESTIONS! -->

           <a id="periodicTableButton" class="btn btn-success btn-large" >Periodic Table</a>


           <!--The popup window with the periodic table -->

          <div id="periodicTableModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="periodicTableModalTitle">The Periodic Table of the Elements</h3>
            </div>
            <div class="modal-body">
              <img style="width: 920px; height: 518px;" src="http://www.chemicool.com/images/periodic-table.png"/>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              
            </div>
          </div>


          <!--The popup window with explantion -->

          <div id="answerCheckerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="answerCheckerModalTitle">Default</h3>
            </div>
            <div class="modal-body">
              <p id="answerCheckerModalBody">One fine body…</p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              
            </div>
          </div>
          
        </div>

        
        <div id="challengeModeDiv"class="hero-unit everythingButHomepage">
          <div>
            <h1>
              Challenge Mode
            </h1>
          </div>

          <!--BEGINNING OF TABLE-->
          
          <table>
        <tr>
            <td class="element" rel="tooltip" id="H"><input type="text"></input></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="element" rel="tooltip" id="He"><input type="text"></input></td>
        </tr>
        <tr>
            <td class="element" rel="tooltip" id="Li"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Be"><input type="text"></input></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="element" rel="tooltip" id="B"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="C"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="N"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="O"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="F"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ne"><input type="text"></input></td>
        </tr>
        <tr>
            <td class="element" rel="tooltip" id="Na"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Mg"><input type="text"></input></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="element" rel="tooltip" id="Al"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Si"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="P"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="S"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Cl"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ar"><input type="text"></input></td>
        </tr>
        <tr>
            <td class="element" rel="tooltip" id="K"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ca"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Sc"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ti"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="V"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Cr"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Mn"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Fe"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Co"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ni"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Cu"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Zn"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ga"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ge"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="As"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Se"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Br"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Kr"><input type="text"></input></td>
        </tr>
        <tr>
            <td class="element" rel="tooltip" id="Rb"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Sr"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Y"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Zr"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Nb"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Mo"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Tc"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ru"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Rh"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Pd"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ag"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Cd"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="In"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Sn"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Sb"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Te"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="I"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Xe"><input type="text"></input></td>
        </tr>
        <tr>
            <td class="element" rel="tooltip" id="Cs"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ba"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Lu"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Hf"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ta"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="W"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Re"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Os"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ir"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Pt"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Au"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Hg"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Tl"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Pb"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Bi"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Po"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="At"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Rn"><input type="text"></input></td>
        </tr>
        <tr>
            <td class="element" rel="tooltip" id="Fr"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ra"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Lr"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Rf"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Db"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Sg"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Bh"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Hs"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Mt"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Ds"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Rg"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Cn"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Uut"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Fl"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Uup"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Lv"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Uus"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Uuo"><input type="text"></input></td>
        </tr>
        <tr>
            <td class="blank fblock"></td>
            <td class="blank fblock"></td>
            <td class="element fblock" id="La"><input type="text"></input></td>
            <td class="element fblock" id="Ce"><input type="text"></input></td>
            <td class="element fblock" id="Pr"><input type="text"></input></td>
            <td class="element fblock" id="Nd"><input type="text"></input></td>
            <td class="element fblock" id="Pm"><input type="text"></input></td>
            <td class="element fblock" id="Sm"><input type="text"></input></td>
            <td class="element fblock" id="Eu"><input type="text"></input></td>
            <td class="element fblock" id="Gd"><input type="text"></input></td>
            <td class="element fblock" id="Tb"><input type="text"></input></td>
            <td class="element fblock" id="Dy"><input type="text"></input></td>
            <td class="element fblock" id="Ho"><input type="text"></input></td>
            <td class="element fblock" id="Er"><input type="text"></input></td>
            <td class="element fblock" id="Tm"><input type="text"></input></td>
            <td class="element fblock" id="Yb"><input type="text"></input></td>
            <td class="blank fblock"></td>
            <td class="blank fblock"></td>
        </tr>
        <tr>
            <td class="blank"></td>
            <td class="blank"></td>
            <td class="element" rel="tooltip" id="Ac"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Th"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Pa"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="U"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Np"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Pu"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Am"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Cm"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Bk"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Cf"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Es"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Fm"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="Md"><input type="text"></input></td>
            <td class="element" rel="tooltip" id="No"><input type="text"></input></td>
            <td class="blank"></td>
            <td class="blank"></td>
        </tr>
    </table>
    
        <style type="text/css">
          .element {
          border: 1px solid black;
        }
        .blank {
            border: 0;
        }
        td {
            width: 40px;
            height: 40px;
            text-align: center;
            vertical-align: middle;
        }
        input {
          width: 15px;
        }

        table {
          width: 720px;
          table-layout: fixed;
        }

    </style>
    
    <!-- END OF TABLE -->
          
        </div>

        <div id="bonusModeDiv"class="hero-unit everythingButHomepage">
          <div>
            <h1>
              Bonus Mode Mode
            </h1>
          </div>

          <!--ALL STUFF DIVS SHOULD GO HERE! -->
          
        </div>

        


      </div>

      <style>
      
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
      </script>
      <script src="assets/js/bootstrap.js">
      </script>
      <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js">
      </script>
      <script src="http://ricostacruz.com/jquery.transit/jquery.transit.min.js">
      </script>
      <script src="code.js">
      </script>
      <script src="challengelogic.js">
      </script>

      
    </body>
    </html>
