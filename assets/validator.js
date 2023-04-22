// Doi tuong
function Validator(options) {

    var selectorRules = {};

    function validate(inputElement, rule) {
        var errorMessage;
        var errorElement = inputElement.parentElement.querySelector(options. ErrorSelector);
        // lay cac rules cua selector
        var rules = selectorRules[rule.selector];

        // lap qua tung rule va kt
        for(var i = 0; i < rules.length; i++) {
            errorMessage=  rules[i](inputElement.value);
            if(errorMessage) break;
        }

        if(errorMessage) {
            errorElement.innerText = errorMessage;
            inputElement.parentElement.classList.add('invalid');
        }else {
            errorElement.innerText = '';
            inputElement.parentElement.classList.remove('invalid');
        }

        return ! errorMessage;
    }

    var formElement = document.querySelector(options.form);

    if (formElement) {
        //khi submit form 
        formElement.onsubmit = function(e) {
            e.preventDefault();

            var isFormValid = true ;
            // lap qua tung rules
            options.rules.forEach(function(rule) {
                var inputElement = formElement.querySelector(rule.selector)
                var isValid= validate(inputElement, rule);
                if (!isValid) {
                    isFormValid = false;
                }
            });
            
            
            if(isFormValid) {
                if( typeof options.onSubmit === 'function' ){
                    var enableInputs = formElement.querySelectorAll('[name]');
                    var formValues = Array.from(enableInputs).reduce(function(values, input){
                        values[input.name] = input.value;
                        return values;
                    }, {});

                    options.onSubmit(formValues);
                    alert('Chúng tôi đã ghi nhận phản hồi của bạn !!. Cám ơn bạn đã phản hồi ');
                    location.replace('index.php');
                }else{
                    formElement.onSubmit();
                    alert('Ops! Ghi nhận bị lỗi =((( . Bạn thử lại sau nhé !')
                }

            }
        }
        // xu li lap qua moi rule va lang nghe su kien blur, input, ....

        options.rules.forEach(function(rule){
            // luu lai cac rules cho mỗi input

            if (Array.isArray(selectorRules[rule.selector])){

            }else{
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElement = formElement.querySelector(rule.selector)


            // truong hop blur
            if (inputElement) {
                inputElement.onblur = function() {
                    validate(inputElement, rule);
                }
                // moi khi nguoi dung nhap input

                inputElement.oninput = function() {
                    var errorElement = inputElement.parentElement.querySelector('.form-message');
                    errorElement.innerText = '';
                    inputElement.parentElement.classList.remove('invalid');

                }
            }
        });
    }
}



//dinh nghia rules

//Nguyên tắc của rules:
// Khi có lỗi => trả message lỗi
// khi hợp lệ => Undefined
Validator.isRequired = function(selector, message) {
  return {
        selector : selector,
        test: function(value){
            return value.trim() ? undefined : message ||'Vui lòng nhập lại'
        }
    };
}

Validator.isEmail = function(selector) {
     return {
        selector : selector,
        test: function(value){
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined :  'Vui lòng nhập email';
        }
    };
}