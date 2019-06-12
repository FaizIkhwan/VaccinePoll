var num = 0;

function checkNum() {
    $.post("http://35.240.226.40/php/checknumber.php",{},
    function(data,status){
        setNum(data);
    });
};

function setNum(data){
    num = data;
};

/*
function Result(questions) {
    this.questions = questions;
    this.questionIndex = 0;
};

Result.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
};

Result.prototype.guess = function(answer) {
    this.getQuestionIndex().isAnswer(answer);
    this.questionIndex++;
};

Result.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
};


function populate() {
    if(results.isEnded()) {
        sayThankYou();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = results.getQuestionIndex().text;

        // show options
        var choices = results.getQuestionIndex().choices;
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
        $.post("sendanswer.php", {
            question: question,
            answer: answer
          }).done(function() {
              console.log("Success");
        });

        results.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = results.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + results.questions.length;
};

function sayThankYou() {
    var gameOverHTML = "<h1>Finished</h1>";
    gameOverHTML += "<h2 id='score'> Thank you</h2>";
    var element = document.getElementById("results");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question("Your Age", ["18-30", "31-39", "40+"]),
    new Question("Gender", ["Male", "Female", "Prefer not to tell"]),
    new Question("Educational profile", ["Post graduate", "Undergraduate","Secondary school"]),
    new Question("How many kids do you have?", ["1-2", "3-4", "5+"]),
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
    new Question("I believe vaccination programmes are worthwhile", ["Agree", "Mixed feeling", "Disagree"]),  
];

// create results
var results = new Result(result);

// display results
populate();
*/