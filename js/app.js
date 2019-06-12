function populate() {
    if(quiz.isEnded()) {
        sayThankYou();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        var question = $("#question").text();
        var answer = guess;
        console.log("question!: " + question);
        console.log("answer: " + answer);

        // send to database
        $.post("php/sendanswer.php", {
            question: question,
            answer: answer
          }).done(function() {
              console.log("Success");
        });

        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function sayThankYou() {
    var gameOverHTML = "<h1>Finished</h1>";
    gameOverHTML += "<h2 id='score'> Thank you</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question("Your Age", ["18-30", "31-39", "40+"]),
    new Question("Gender", ["Male", "Female", "Prefer not to tell"]),
    new Question("Educational profile", ["Post graduate", "Undergraduate","Secondary school"]),
    new Question("How many kids do you have?", ["0-2", "3-4", "5+"]),
    new Question("I believe it is important for my child to receive all the necessary vaccinations", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("I believe politicians should be role models that encourage vaccination", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("Tony Blair did not vaccinate his children with the mmr vaccine;this did/would discourage me from vaccinating my children", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("I still believe there could be a link between the mmr vaccination and autism", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("It worries me that vaccinations are irreversible", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("I worry about the possible side effects of vaccinations", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("Media reports on vaccination programmes encourage me to vaccinate my child", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("I believe vaccination programmes are worthwhile", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("I believe the media exaggerate reports about disease outbreak and vaccinations", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("I feel well-informed about vaccinations for my children", ["Agree", "Mixed feeling", "Disagree"]),
    new Question("Please select your household income", ["<=RM1500", "RM1501-RM3500", ">=RM3501"]),  
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();
