// Move up the label when input is not empty
var formInputs = document.getElementsByClassName('form__input')

for(var i=0 ; i < formInputs.length ; i++) {
    formInputs[i].addEventListener("keyup", (e) => {
        if(!e.target.value) {
            e.target.classList.remove("not-empty")
        } else {
            e.target.classList.add("not-empty")
            lastChildIndex = e.target.parentNode.children.length-1
            if(e.target.parentNode.children[lastChildIndex].className == 'error') {
                e.target.parentNode.children[lastChildIndex].style.display="none"
            }
        }
    })
}

window.onload = () => {
    var formInputs = document.getElementsByClassName('form__input')
    for(var i=0 ; i < formInputs.length ; i++) {
        if(!formInputs[i].value) {
            formInputs[i].classList.remove("not-empty")
        } else {
            formInputs[i].classList.add("not-empty")
        }
    }

    var flash = document.getElementsByClassName('flash')
    for(var i=0 ; i < flash.length ; i++) {
        flash[i].classList.add('active');
    }
    setTimeout(() => {
        var flash = document.getElementsByClassName('flash');
        for(var i=0 ; i < flash.length ; i++) {
            flash[i].classList.remove('active');
        }
    }, 5000);
}
