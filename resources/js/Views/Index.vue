<template>
    <div class="container">
        <div class="text-center">
            <h1>Select Payment Passarel</h1>            
        </div>
        <div class="text-center d-flex flex-column justify-content-center align-items-center p-5" style="max-height:15rem;overflow:auto;">
            <div style="padding-top:25rem">
                <div class="card mb-2">
                    <div class="card-body">
                        <input type="radio" value="Paypal" id="paypal" v-model="passarels" />
                        <label for="paypal">Paypal</label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <input type="radio" value="Stripe" id="stripe" v-model="passarels" />
                        <label for="stripe">
                            <img class="img-fluid" src="/images/stripe-icon.jpg" width="70" /> 
                        </label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <input type="radio" value="Placetopay Evertec" id="PlacetopayEvertec" v-model="passarels" />
                        <label for="PlacetopayEvertec">Placetopay Evertec</label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <input type="radio" value="PayU" id="PayU" v-model="passarels" />
                        <label for="PayU">
                            <img class="img-fluid" src="/images/payu.png" width="70" /> 
                        </label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <input type="radio" value="EpayCo" id="EpayCo" v-model="passarels" />
                        <label for="EpayCo">
                            <img class="img-fluid" src="/images/epayco.png" width="70" /> 
                        </label>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <input type="radio" value="Wompi" id="Wompi" v-model="passarels" />
                        <label for="Wompi">Wompi</label>
                    </div>
                </div>
            </div>

        </div><br>
        <payment-input />
    </div>
</template>

<script>
    import PaymentInput from './PaymentInput.vue'
    export default {
        components:{
            PaymentInput
        },
        data(){
            return {
                passarels: ''
            }
        }
    }
</script>

<style>

</style>