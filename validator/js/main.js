window.validator = {
    prev: '',
    inputsBlock: '',
    regExp: '',
    init: () => {
        this.inputsBlock = document.querySelector('.inputs-block');
        this.regExp = /\(\)/gi;
        validator.addFieldInputs()
    },
    addFieldInputs: () => {
        if (this.inputsBlock) {
            let input = document.createElement('input');
            input.className = 'item';
            input.type = 'text';
            input.placeholder = 'Введите выражение';
            this.inputsBlock.append(input);
        }
    },
    validate: () => {
        const inputs = document.querySelectorAll('.item');
        if (inputs) {
            inputs.forEach((item) => {
                if (item.classList.contains('success') || item.classList.contains('error')) {
                    item.classList.remove('success', 'error');
                }
                if (item.value === '')
                    item.classList.add('success');
                else {
                    if (validator.check(item.value)) {
                        item.classList.add('success');
                    } else {
                        item.classList.add('error');
                    }
                }
                this.prev = '';
            })
        }
    },
    check: (expression) => {
        if (!expression.length) return true;
        if (this.prev !== expression) {
            this.prev = expression;
            return validator.check(expression.replace(regExp, ''));
        } else
            return false;
    }
}
window.addEventListener('load', () => {
    validator.init();
})