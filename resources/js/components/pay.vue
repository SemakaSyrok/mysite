<template>
    <div class="container">

        <div class="row">
            <div class="col-xs-10 col-md-8 col-lg-7 col-xl-6 d-block mx-auto mt-4 p-3 bg-white shadow">
                <h3 class="mt-2">Get VMS source code</h3>
                <br>
                <p>Type email on witch i will send link to download the source</p>

                <label for="email" class="text-muted">Email</label>
                <input type="email" name="email" id="email" class="form-control" v-model="email" >
                <input type="email" id="hidden-email" hidden>
                <span class="text-danger mt-1" v-if="errorMessage" >{{ errorMessage }}</span>


                <div class="row ">

                    <div class="col-12 mt-3">
                        <span v-if="!request" >
                            <button
                                v-if="!buy"
                                @click="setUpEmail()"
                                class="btn btn-outline-success  mx-auto"
                                id="sendBTN"
                                style="display: block"
                            >Send</button>
                        </span>
                        <span v-else class="" >
                            <img
                                src="/images/preloader.gif"
                                alt="preloader" class="mx-auto d-block"
                                id="preloader"
                                style="width: 40px;"
                            >
                        </span>
                    </div>

                    <div class="col-12 mt-2">

                    </div>

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
