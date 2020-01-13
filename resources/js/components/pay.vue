<template>
    <div class="container">

        <div class="row">
            <div class="col-xs-10 col-md-8 col-lg-7 col-xl-6 d-block mx-auto mt-4 p-3 bg-white shadow">
                <h3 class="mt-2">Get VMS source code</h3>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="8P4D5J5LPMV4E">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/ru_RU/i/scr/pixel.gif" width="1" height="1">
                </form>

                    <div class="col-12 mt-4">
                        <div id="paypal-button" style="width: 200px; " class="d-block mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        name: "Pay",
        data() {
            return {
                request: false,
                buy: false,
                email: '',
                errorMessage: '',
                error: false,
            }
        },
        methods: {
            setUpEmail() {
                this.errorMessage = '';
                this.request = true;

                    axios
                        .get(`/set-email?email=${this.email}`)
                        .then(res => {
                            this.buy = true;
                            document.querySelector('#hidden-email').value = this.email;
                            this.render()
                        })
                        .catch(err => {
                            this.errorMessage = 'Invalid email'
                        })
                        .finally(() => {
                            this.request = false
                        })

            },
            render() {

                paypal.Button.render({
                    env: 'sandbox',

                    payment: function(data,actions) {

                        return actions.request.post('/api/create-payment/', {
                            email: document.querySelector('#hidden-email').value
                        }).then(res => {
                            return res.id;
                        })

                    },
                    onAuthorize:function(data,actions) {
                        return actions.request.post('/api/execute-payment/', {
                            paymentID: data.paymentID,
                            payerID: data.payerID,
                            email: document.querySelector('#hidden-email').value
                        }).then(res => {
                            console.log(res);
                            alert('success!');
                        }).catch(err => {
                            console.log('err');
                            console.log(err);
                        });
                    },
                    style: {
                        size: 'responsive',
                        color: 'gold',
                        shape: 'pill'
                    }
                }, '#paypal-button');

            }
        },
        computed: {

        }
    }
</script>

<style scoped>





</style>
