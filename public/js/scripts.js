const links = document.querySelectorAll('a[href*="#"]')

for (let link of links) {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        const blockID = link.getAttribute('href').substr(1);

        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    })
}

/*let create_account_button = document.querySelector('#create_new_account');
create_account_button.addEventListener('click', function (){
    document.querySelector('.section--login').classList.add('d-none');
    document.querySelector('.section--registration').classList.remove('d-none');
});

let have_account_button = document.querySelector('#have_account');
have_account_button.addEventListener('click', function (){
    document.querySelector('.section--login').classList.remove('d-none');
    document.querySelector('.section--registration').classList.add('d-none');
});*/

let input = document.querySelector('input');

if(input !== null){
    document.querySelectorAll('form').forEach(function (currentValue, index){
        let all_inputs = currentValue.querySelectorAll('input, textarea');
        all_inputs.forEach(function (element, elementIndex) {
            if(element.value && currentValue.classList.value !== 'send__email__form'){
                try {
                    element.parentNode.querySelector('label').classList.add('input-active');
                }catch (e) {
                }
            }
        });
        currentValue.addEventListener('focusin', function (){
            let input = document.querySelector('input:focus');
            if(input === null){
                let textarea = document.querySelector('textarea:focus');
                if(textarea === null){
                    return false;
                }else{
                    textarea.parentNode.querySelector('label').classList.add('input-active');
                    textarea.addEventListener('blur', () => {
                        if(textarea.value === ''){
                            textarea.parentNode.querySelector('label').classList.remove('input-active');
                        }
                    })
                    textarea.addEventListener("input", function (event)
                    {
                        if(textarea.id === 'email'){
                            event.target.value = event.target.value.replace(/[А-ЯЁа-яё]/, "");
                        }
                        else if(textarea.id === 'inn'){
                            event.target.value = event.target.value.replace(/\D/, "");
                        }
                    });
                    return true;
                }
            }
            input.parentNode.querySelector('label').classList.add('input-active');
            input.parentNode.querySelector('.icon_forms') !== null ? input.parentNode.querySelector('.icon_forms').classList.add('fa-none'):false;
            input.addEventListener('blur', () => {
                if(input.value === ''){
                    input.parentNode.querySelector('label').classList.remove('input-active');
                    input.parentNode.querySelector('.icon_forms') !== null ? input.parentNode.querySelector('.icon_forms').classList.remove('fa-none'):false;
                }
            })
            input.addEventListener("input", function (event)
            {
                if(input.id === 'email'){
                    event.target.value = event.target.value.replace(/[А-ЯЁа-яё]/, "");
                }else if(input.id === 'inn'){
                    event.target.value = event.target.value.replace(/\D/, "");
                }
            });
            return true;
        });
    });

    document.querySelectorAll('form').forEach(function (currentValue, index){
        currentValue.addEventListener('change', function (){
            let input = document.querySelectorAll('.form__input');
            if(input === null){
                return false;
            }
            input.forEach(function (el, i, input){
                if(el.value !== '' && !el.classList.contains('input-active')){
                    el.parentNode.querySelector('label').classList.add('input-active');
                    el.parentNode.querySelector('.icon_forms') !== null ? el.parentNode.querySelector('.icon_forms').classList.add('fa-none'):false;
                }
            });
        });
    });
}

let js_hamburger = document.querySelector('.js_navigation_show');
if(js_hamburger !== null){
    js_hamburger.addEventListener('click', function (){
        let logoBlack = document.querySelector('.header__logo__block');
        let logoWhite = document.querySelector('.header__logo__white');
        let body = document.querySelector('.home-template');
        let button = document.querySelector('.js_navigation_show');
        let curtain = document.querySelector('.under_curtain');
        if(button.classList.contains('is-menu')){
            logoBlack.classList.remove('d-none');
            logoWhite.classList.add('d-none');
            body.classList.remove('stop-scrolling');
            button.classList.remove('is-menu');
            curtain.classList.remove('show');
        }else{
            logoBlack.classList.add('d-none');
            logoWhite.classList.remove('d-none');
            body.classList.add('stop-scrolling');
            button.classList.add('is-menu')
            curtain.classList.add('show');
        }
    });
}

window.addEventListener('resize', function(event) {
    const availableScreenWidth = window.screen.availWidth
    let logo = document.querySelector('.logo');
    let body = document.querySelector('.home-template');
    let button = document.querySelector('.js_navigation_show');
    let curtain = document.querySelector('.under_curtain');
    if(availableScreenWidth >= 768){
        if(logo === null){
            return false;
        }
        body.classList.remove('stop-scrolling');
        button.classList.remove('is-menu');
        curtain.classList.remove('show');
    }else{
        return false;
    }
}, true);

window.onload = function (){
    let phoneInputs = document.querySelectorAll('input[data-tel-input]');

    let getInputNumbersValue = function (input) {
        // Return stripped input value — just numbers
        return input.value.replace(/\D/g, '');
    }

    let onPhonePaste = function (e) {
        let input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        let pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            let pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
                // formatting will be in onPhoneInput handler
                input.value = inputNumbersValue;
                return false;
            }
        }
    }

    let onPhoneInput = function (e) {
        let input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length !== selectionStart) {
            // Editing in the middle of input, not last symbol
            if (e.data && /\D/g.test(e.data)) {
                // Attempt to input non-numeric symbol
                input.value = inputNumbersValue;
            }
            return;
        }

        if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
            if (inputNumbersValue[0] === "9") inputNumbersValue = "7" + inputNumbersValue;
            let firstSymbols = (inputNumbersValue[0] === "8") ? "8" : "+7";
            formattedInputValue = input.value = firstSymbols + " ";
            if (inputNumbersValue.length > 1) {
                formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
            }
            if (inputNumbersValue.length >= 5) {
                formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
            }
            if (inputNumbersValue.length >= 8) {
                formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
            }
            if (inputNumbersValue.length >= 10) {
                formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
            }
        } else {
            formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        }
        input.value = formattedInputValue;
    }
    let onPhoneKeyDown = function (e) {
        // Clear input after remove last symbol
        let inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode === 8 && inputValue.length === 1) {
            e.target.value = "";
        }
    }
    for (let phoneInput of phoneInputs) {
        phoneInput.addEventListener('keydown', onPhoneKeyDown);
        phoneInput.addEventListener('input', onPhoneInput, false);
        phoneInput.addEventListener('paste', onPhonePaste, false);
    }
}
