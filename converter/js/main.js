window.api = {
    getCurrency: async () => {
        const response = await fetch('api/rates');
        if (response.ok) {
            return response.json();
        } else {
            return response.status;
        }
    },
    update: (rate) => {
        const result = document.querySelector('#result');
        const source = document.querySelector('#source');
        if (result && source) {
            let currency = parseFloat((source.value * rate))
            if (!isNaN(currency)) {
                result.value = currency.toFixed(2);
            }else {
                result.value= 'Введите число';
            }
        }
    }
}

let converterForm = document.querySelector('.converter');
if (converterForm) {
    converterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const response = api.getCurrency()
        response.then(rate => api.update(rate.data.rate));
    })
}