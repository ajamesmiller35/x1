function assignOrder(){
    var order = [];
    var testNum = 0;
    let type='';

    /*order[0] = getRandomInt(3);
    order[1] = getRandomInt(3);
    order[2] = getRandomInt(3);

    while(order[0] == order[1]){
        order[1] = getRandomInt(3);
    }
    while( order[0] == order[2] || order[1] == order[2] ){
        order[2] = getRandomInt(3);
    }

    order[3] = 6 - order[0] - order[1] - order[2];
    order[4] = 4;*/

    order[0] = getRandomInt(1);
    order[1] = 1 - order[0];
    order[2] = 4;

    localStorage.setItem('order', order);
    localStorage.setItem('testNum', testNum);

    //set mobile or desktop version
    if($(window).width() < 1400){
        type = 'm';
        localStorage.setItem('type', type);
    }
    else{
        type = 'd';
        localStorage.setItem('type', type);
    }

    location.href = "./" + order[testNum] + "/" + type + "/0.html";
}

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }
