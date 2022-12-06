@extends('frontend.master')

@section('content')
    <!-- Order Details -->
    <div class="col-md-3"></div>
    <div class="col-md-6 order-details" style="margin: 100px 0 100px 0;">
        <div class="section-title text-center">
            <h3 class="title text-info">Your Order</h3>
        </div>
        <div class="order-summary">
            <div class="order-col">
                <div><strong>PRODUCT</strong></div>
                <div><strong>TOTAL</strong></div>
            </div>
            <div class="order-products">
                @foreach($cart_array as $cart)
                    <div class="order-col">
                        <div>{{$cart['quantity']}}x {{$cart['name']}}</div>
                        <div>&#2547; {{Cart::get($cart['id'])->getPriceSum()}}</div>
                    </div>
                @endforeach
            </div>

            <div class="order-col">
                <div>Shiping</div>
                <div><strong>&#2547; 50</strong></div>
            </div>
            <div class="order-col">
                <div><strong>TOTAL</strong></div>
                <div><strong class="order-total">&#2547; {{Cart::getTotal()+50}}</strong></div>
            </div>
        </div>
        <form action="{{route('place.order')}}" method="post">
            @csrf
            <div class="section-title text-center">
                <h4 class="title text-primary">Please select a payment method</h4>
            </div>
            <div class="payment-method">
                <div class="input-radio">
                    <input type="radio" name="payment" id="payment-1" value="cash on delivery">
                    <label for="payment-1">
                        <span></span>
                        Cash on Delivery
                    </label>
                    <div class="caption">
                        <p>Payment after product in hand</p>
                    </div>
                </div>
                <div class="input-radio">
                    <input type="radio" name="payment" id="payment-2" value="bkash">
                    <label for="payment-2">
                        <span></span>
                        Bkash
                    </label>
                    <div class="caption">
                        <p>Send vie bkash. Bkash No: 01610440622</p>
                    </div>
                </div>
                <div class="input-radio">
                    <input type="radio" name="payment" id="payment-3" value="rocket">
                    <label for="payment-3">
                        <span></span>
                        Rocket
                    </label>
                    <div class="caption">
                        <p>Send vie rocket. Rocket No: 016104406225</p>
                    </div>
                </div>
                <div class="input-radio">
                    <input type="radio" name="payment" id="payment-4" value="nagad">
                    <label for="payment-4">
                        <span></span>
                        Nagad
                    </label>
                    <div class="caption">
                        <p>Send vie nagad. Nagad No: 016104406225</p>
                    </div>
                </div>
            </div>
            <div class="input-checkbox">
                <input type="checkbox" id="terms">
                <label for="terms">
                    <span></span>
                    I've read and accept the <a href="#">terms & conditions</a>
                </label>
            </div>
            <button type="submit" class="primary-btn" style="float: right;">Place order</button>
        </form>
    </div>
    <div class="col-md-3"></div>
    <!-- /Order Details -->
@endsection
