const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');
const options = document.getElementByName('shipping_option');


//check if navbar is showing or not on  mobile
if (bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');

    })
}


//close navbar if menu is showing on mobile
if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}
    

//Make customer only pick one shipping option
function shipping_Selection (){
    let selectedOption;
    for (const option of options){
        if (options.checked){
            selectedOption = option.value;
            break;
        }
    }

}

