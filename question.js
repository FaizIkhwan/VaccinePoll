function Question(text, choices) {
    this.text = text;
    this.choices = choices;    
}

Question.prototype.isAnswer = function(choice) {
    console.log("Text: " + this.text);
    console.log("Choice: " + choice);
}
