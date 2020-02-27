function assignOrder(){
    var order = [];
    var navOrder = [];
    var testNum = 0;

    /*order[0] = getRandomInt(3);
    order[1] = getRandomInt(3);
    order[2] = getRandomInt(3);

    while(order[0] == order[1]){
        order[1] = getRandomInt(3);
    }
    while( order[0] == order[2] || order[1] == order[2] ){
        order[2] = getRandomInt(3);
    }d

    order[3] = 6 - order[0] - order[1] - order[2];
    order[4] = 4;*/

    order[0] = getRandomInt(2);
    order[1] = 1 - order[0];
    order[2] = 4;

    navOrder[0] = getRandomInt(2);
    navOrder[1] = 1 - navOrder[0];

    localStorage.setItem('order', order);
    localStorage.setItem('navOrder', navOrder);
    localStorage.setItem('testNum', testNum);

    location.href = "./" + order[testNum] + "/" + type + "/0.html";
}

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
  }
