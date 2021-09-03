<template>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">Payment Method Card</div>
                <div class="card-title">{{passarels}}</div>
            </div>
            <div :class="`card-body ${passarels !== 'Paypal' ? 'd-none' : ''}`">
            <div id="paypal-button-container" class="w-50"></div>
            </div>
            <div :class="`card-body ${passarels !== 'Stripe' ? 'd-none' : ''}`">
                <div id="card-element" style="width:25rem"></div>
                <div class="mt-3">
                    <button class="btn rounded-pill bg-primary text-white px-2">Pay Stripe</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    computed:{
        passarels(){
            return this.$parent.passarels
        },
        stripe(){
           return Stripe(MIX_APP_STRIPE_TEST_PUBLIC)
        }
    },
    mounted(){
        // se crea el boton de pago paypal
        paypal.Buttons().render('#paypal-button-container')
        // se crea el boton de pago stripe
        var elements = this.stripe.elements();
        var cardElement = elements.create('card')
        cardElement.mount('#card-element')
    },
    methods:{
    
    }
}
</script>

<style>
</style>