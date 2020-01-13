let payPalOpen = () => {
    paypal.Button.render({
        env: 'sandbox',

        payment: function(data,actions) {

            return actions.request.post('/api/create-payment/')
                .then(res => {
                    return res.id;
                })

        },
        onAuthorize:function(data,actions) {
            return actions.request.post('/api/execute-payment/', {
                paymentID: data.paymentID,
                payerID: data.payerID
            }).then(res => {

            });
        },
        style: {
            size: 'responsive',
            color: 'gold',
            shape: 'pill'
        }
    }, '#paypal-button');
};

let setUpEmail = () => {
    console.log('asdf');
    document.querySelector('#sendBTN').style.display = 'none';
    document.querySelector('#preloader').style.display = 'block';

    let email = document.querySelector('#email').value;



}
