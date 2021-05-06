<template>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div v-if="message" class="bg-info ">
                    <h3 class="text-danger">User created sucssessfully</h3>

                </div>
            <div class="checkout_details_area mt-50 clearfix">
                
                <div class="cart-title">

                    <h2>Checkout</h2>
                </div>

                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control"   v-model="user.fName"  placeholder="First Name" required/>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control"  v-model="user.lName" placeholder="Last Name" required />
                        </div>
                        
                        <div class="col-12 mb-3">
                            <input type="email" class="form-control" v-model="user.email" placeholder="Email" value="" />
                        </div>
                        <div class="col-12 mb-3">
                            <select class="w-100" >
                                <option value="pk">Pakistan</option>
                                <option value="usa">United States</option>
                                <option value="uk">United Kingdom</option>
                                <option value="ger">Germany</option>
                                <option value="ind">India</option>
                                <option value="aus">Australia</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control mb-3" v-model="user.address" placeholder="Address" value="" />
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control"  placeholder="City" v-model="user.city" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control"  placeholder="Zip Code" v-model="user.zipCode" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="number" class="form-control"  min="0" placeholder="Phone No" v-model="user.phone"/>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea  class="form-control w-100" v-model="user.comment"  cols="30" rows="10" placeholder="Leave a comment about your order" ></textarea>
                        </div>

                        <div class="col-12">
                            <div class="custom-control custom-checkbox d-block mb-2" >
                                <input v-on:click.once="done()" type="checkbox" value="Register" class="custom-control-input" id="customCheck2" />
                                <label class="custom-control-label" for="customCheck2">Create an accout</label >
                            </div>
                        </div>
                        <!-- btn checkbox type , class=>custom-control-input, id, customCheck2 -->
                    </div>
                </form>
            </div> 
        </div>
        <div class="col-12 col-lg-4">
            <div class="cart-summary">
                <h5>Cart Total </h5>
                <ul class="summary-table">
                    <li>
                        <span>subtotal:</span> <span>$ {{ subtotal}}</span>
                    </li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li>
                        <span>total:</span> <span>$ {{ total }}</span>
                    </li>
                </ul>

                <div class="payment-method">
                    <!-- Cash on delivery -->
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="cod" checked />
                        <label class="custom-control-label" for="cod" >Cash on Delivery</label >
                    </div>
                    <!-- Paypal -->
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="paypal" />
                        <label class="custom-control-label" for="paypal" >Paypal
                            <img class="ml-15" src="storage/img/core-img/paypal.png"/></label>
                    </div>
                </div>
                <div class="cart-btn mt-100">
                    <a href="/checkoutStripe" class="btn amado-btn w-100" >Checkout</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        // title:String,
        subtotal:String,
        total:String
    },
    data(){
        return {
            message: '',
           user:{
               address: '',
               fName: '',
               lName: '',
               country: 'Pakistan',
               email: '',
               city: '',
               phone: '',
               zipCode: '',
               comment: '',
           }
        }
    },
    methods:{
        done(){
            axios.post('/api/create',this.user)
            .then(res=>
            this.message = res.data)
            
       }

    }
};
</script>
