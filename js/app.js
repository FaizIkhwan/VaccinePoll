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

var questions = [];
var quiz;

$.post("http://35.240.226.40/php/getquestion.php", {}, function(data){createQuiz(data)});

function createQuiz(data){
    var parsedJson = JSON.parse(data);
    
    for (i = 0; i < parsedJson.length; i++) { 
      var text = parsedJson[i][0];
      var textarr = [parsedJson[i][1], parsedJson[i][2], parsedJson[i][3]];
      questions.push(new Question(text,textarr));
    }
    quiz = new Quiz(questions);
    populate();
}

