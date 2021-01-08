
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Techie</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        
    </head>
    <body>
       <header>
           <div class="top-nav container">
               <div class="logo">Techie</div>
               <ul>
                   <li><a href="{{ route('shop.index')}}">Shop</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="#">Blog</a></li>
                   <li><a href="{{ route('cart.index') }}">Cart 
                        @if(Cart::instance('default')->count() > 0)
                            <span class="cart-count">{{ Cart::instance('default')->count() }} </span>
                        @endif
                    </a></li>
               </ul>
           </div><!--end of top-nav-->
       </header>
       <div class="breadcrumbs">
            <div class="container">
                <a href="/">Home</a>
                <i class="fa fa-chevron-right breadcrumbs-separator"></i>
                <span>Cart</span>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
            </div>
        </div>  
        <div class="cart container">
            <div>
                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()-> get('success_message')}}
                    </div>
                @endif

                @if(count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
            @if  (Cart::count() > 0)
            
            <h2>{{ Cart::count() }} Item(s) in Cart!</h2>
            <ul class="cart-items">
                @foreach(Cart::content() as $item)
                <li>
                    <a href="#"><img src="{{asset('img/products/'.$item->model->slug.'.png')}}" alt="product image" class="small"></a>
                    <div class="product-details">
                        <span><a href="#">{{ $item->model->name}}</a></span>
                        <span>{{ $item->model->details }}</span>
                    </div>
                    <div class="product-options">
                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button class="action-button" type='submit'><i class="fa fa-trash"></i></button>
                        </form>
                        <button class="action-button"><i class="fa fa-heart"></i></button>
                    </div>
                    <div>{{$item->model->presentPrice()}}</div>
                </li>
                @endforeach

            </ul>

            @else
                <h3>No items in cart!</h3>
                <a href="{{ route('shop.index') }}"><h3>Continue Shopping<h3></a>
            @endif

            <div class="coupon-container">
                <input type="text" class="apply-textarea" placeholder="Enter Coupon Code Here">
                <button class="button apply">Apply</button>
            </div>
            <div class="checkout-container">
                <div class="cart-totals-right">
                    Subtotal <br>
                    Tax <br>
                    <span class="cart-totals-total">Total</span>
                </div>
                <div class="cart-totals-subtotal">
                    {{ Cart::subtotal() }} <br>
                    {{ Cart::tax() }} <br>
                    <span class="cart-totals-total">{{ Cart::total() }}</span>
                </div>
            </div>
            <div class="checkout">
                <button class="text-center button">Checkout</button>
            </div>
        </div>
        </div>

       <footer>
           <div class="footer-content container">
               <div class="made-with">Made With <i class="fa fa-heart"></i>by Michael</div>
               <ul>
                   <li>Follow Me:</li>
                   <li><a href="#" class="fa fa-globe"></a></li>
                   <li><a href="#" class="fa fa-youtube"></a></li>
                   <li><a href="#" class="fa fa-github"></a></li>
                   <li><a href="#" class="fa fa-globe"></a></li>
               </ul>
           </div><!--end footer-content-->
       </footer>

    </body>
</html>
