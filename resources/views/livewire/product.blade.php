<div>
    <div class="row">
        <div class="col-md-9">
            <div class="row padding-y">
                @foreach($products as $product)
                <div class="col-md-3">
                    <figure class="card card-product-grid">
                        <div class="row">
                            <div class="col-md-12 col-5 p-r-0 center-responsive">
                                <div class="img-wrap img-fluid center"> 
                                    <img src="https://dummyimage.com/mediumrectangle">
                                </div> <!-- img-wrap.// -->
                            </div>
                            <div class="col-md-12 col-7 p-l-0">
                                <figcaption class="info-wrap">
                                    <h6 class="a-size-mini spacing-none line-clamp-4">
                                        <a href="#" class="a-color on-hover">
                                            <span class="a-size-base-plus a-text-normal">
                                               {{ $product->name }}
                                            </span>
                                        </a>
                                    </h6>
                                    
                                    <div class="price mt-1">৳ {{ $product->price }}</div> <!-- price-wrap.// -->
                                    <?php $cart = \Cart::getContent(); ?>
                                    @if($cart->has($product->id))
                                        <div class="flex flex-col items-center justify-center text-center bg-warning">
                                            <button wire:click.prevent="decrement({{ $product->id }})" class="bg-red-500 btn">&minus;</button>
                                            <span class="font-bold ml-4" wire:transition.fade>
                                            {{ $cart->where('id', $product->id)->first()->quantity }} in cart
                                            </span>
                                            <button wire:click.prevent="increment({{ $product->id }})" class="bg-green-500 btn">&plus;</button>
                                        </div>
                                    @else
                                        <a wire:click.lazy="addToCart({{ $product->id }})" class="square_btn_4 btn-block"><i
                                        class="fas fa-shopping-cart pr-2"></i>Add to cart </a>
                                    @endif
                                </figcaption>
                            </div>
                        </div>
                    </figure>
                </div> <!-- col.// -->
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div id="wrapper shadow">
                <div id="sidebar-wrapper" class="shadow">
                    <div class="card">
                        <div class="title">
                            <div class="row m-0">
                                    <div class="col">
                                        <h4><b>Shopping Cart</b></h4>
                                    </div>
                                    <div class="col align-self-center text-right text-muted">{{ $cart->count() }} items</div>
                                </div>
                        </div>
                        @if(\Cart::isEmpty())
                        <p class="alert alert-warning">Your shopping cart is empty.</p>
                        @else
                        @foreach(\Cart::getContent() as $item)
                        <div class="row m-0 border-top border-bottom">
                            <div class="row m-0 main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="https://dummyimage.com/36x36/bababa/fff"></div>
                                <div class="col-4">
                                    {{ $item->name }}
                                </div>
                                <div class="col"> <a wire:click.prevent="decrement({{ $item->id }})" class="p-2">-</a>{{ $item->quantity }}<a wire:click.prevent="increment({{ $item->id }})" class="p-2">+</a> </div>
                                <div class="col text-center">
                                    ৳ {{ \Cart::get($item->id)->getPriceSum() }}
                                    <button wire:click="removeFromCart({{ $item->id }})">&#10005;</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-12 text-right">
                            <span>Subtotal ({{ \Cart::getTotalQuantity() }} Qty): <strong>{{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }} </strong></span>
                            </div>
                        </div>
                        <div class="back-to-shop"><button class="btn btn-block square_btn_4">Checkout</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="cursor-pointer">
        <div class="cart-div text-center shadow bg-gray">
            <div class="p-2 bg-dark text-white">{{ $cart->count() }} item</div>
            <div class="p-1">৳ {{ \Cart::getSubTotal() }}</div>
        </div>
    </a>
</div>