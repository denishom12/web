/**
 *
 *
 * @type {string}
 */

let users = [
    {
        name: "ioann",
        email: "ioann@mail.ru",
        age: "23"
    },
    {
        name: "Petr 1",
        email: "petrnodead@mail.ru",
        age: "19"
    },
    {
        name: "sasha",
        email: "sanypk@mail.ru",
        age: "14"
    }

];

/**
 * Фильтрует массив
 *
 * @param users
 * @param age
 * @returns {[]}
 */

function filter(users, age = 18){
    let result = [];

    users.forEach(function(item){
        if(item.age > age){
            result.push(item);
        }
    });


    return result;
}

let btn = document.querySelector('.btn-click');
btn.addEventListener('click', function(event){
    let textNode = document.querySelector('.title-text');
    let input = document.querySelector('.edit-text');
    textNode.innerHTML = 'Hello';
    input.classList.toggle('hidden');
});


let input = document.querySelector('.edit-text');
input.addEventListener('keydown',function(event){
    let textNode = document.querySelector('.title-text');
    textNode.innerHTML = this.value;
});