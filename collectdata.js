$(document).ready(function () {

    // Listen to click event on the <btn0> itself!
    $('#btn0').click(function (e) {
  
      e.preventDefault();
  
      var question = $("#question").text();
      var answer = $("#btn0").text();

      console.log("From app question: " + question);
      console.log("From app answer: " + answer);
  
      $.post("sendanswer.php", {
        question: question,
        answer: answer
      }).done(function() {
          console.log("Success");
        });
    });

    // Listen to click event on the <btn1> itself!
    $('#btn1').click(function (e) {
  
        e.preventDefault();
    
        var question = $("#question").text();        
        var answer = $("#btn1").text();
  
        console.log("From app question: " + question);        
        console.log("From app answer: " + answer);        
    
        $.post("sendanswer.php", {
          question: question,
          answer: answer
        }).done(function() {
            console.log("Success");
          });
      });

    // Listen to click event on the <btn2> itself!
    $('#btn2').click(function (e) {
  
        e.preventDefault();
    
        var question = $("#question").text();
        var answer = $("#btn2").text();
  
        console.log("From app question: " + question);
        console.log("From app answer: " + answer);
    
        $.post("sendanswer.php", {
          question: question,
          answer: answer
        }).done(function() {
            console.log("Success");
          });
      });

  });