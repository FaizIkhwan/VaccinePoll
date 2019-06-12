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
