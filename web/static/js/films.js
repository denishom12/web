/**
 * Отправляет Ajax запрос.
 *
 * @param url
 * @param type
 * @param callback
 */
function sendAjax(url, type, callback) {
    let xhr = new XMLHttpRequest();
    xhr.open(type, url);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let data = JSON.parse(this.responseText);
            callback(data);
        }
    };
}

sendAjax('http://localhost:50001/api/v1/films', 'get', function(data){
    let list = document.querySelector('.films-list');
    data.forEach(function(item){
        let node = document.createElement('article');
        node.innerHTML = item.title;
        list.append(node);
    });
});



let counter = getCounter();
let counterText = document.querySelector('.count');
let on = true;
let interval = setInterval(function(){
   if(on){
       counter++;
       counterText.innerHTML = counter;
       setCounter(counter);
   }
}, 1000);

let btnTimer = document.querySelector('.btn-timer');
btnTimer.addEventListener('click', function(event){
    on = !on;
    this.classList.toggle('btn-danger');
    this.classList.toggle('btn-success');
    this.innerHTML = on ? 'Off' : 'on';
});

setTimeout(function(){
    console.log('Time Out')
}, 5000);


let btnClear = document.querySelector('.btn-clear');
btnClear.addEventListener('click', function(){
   counter = 0;
});


/**
 * Возвращает счетчик
 *npm install -g @vue/cli
 *
 */
function getCounter(){
    let number = localStorage.getItem('counter');
    if(number === null){
        number = 0;
    }
    return parseInt(number);
}

function setCounter(number){
    localStorage.setItem('counter', number);
}

















