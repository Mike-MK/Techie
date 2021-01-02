
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
                   <li><a href="#">Shop</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="#">Blog</a></li>
                   <li><a href="#">Cart</a></li>
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
            <h2>Items in Cart</h2>
            <ul class="cart-items">
                <li>
                    <img src="{{asset('img/products/laptop-1.png')}}" alt="product image" class="small">
                    <div class="product-details">
                        <span>MacBook Pro</span>
                        <span>15 inch, 1TB SSD, 32GB RAM</span>
                    </div>
                    <div class="product-options">
                        <button class="action-button"><i class="fa fa-trash"></i></button>
                        <button class="action-button"><i class="fa fa-heart"></i></button>
                    </div>
                </li>
                <li>
                    <img src="{{asset('img/products/laptop-1.png')}}" alt="product image" class="small">
                    <div class="product-details">
                        <span>MacBook Pro</span>
                        <span>15 inch, 1TB SSD, 32GB RAM</span>
                    </div>
                    <div class="product-options">
                        <button class="action-button"><i class="fa fa-trash"></i></button>
                        <button class="action-button"><i class="fa fa-heart"></i></button>
                    </div>
                </li>
                <li>
                    <img src="{{asset('img/products/laptop-1.png')}}" alt="product image" class="small">
                    <div class="product-details">
                        <span>MacBook Pro</span>
                        <span>15 inch, 1TB SSD, 32GB RAM</span>
                    </div>
                    <div class="product-options">
                        <button class="action-button"><i class="fa fa-trash"></i></button>
                        <button class="action-button"><i class="fa fa-heart"></i></button>
                    </div>
                </li>
            </ul>
            <div class="coupon-container">
                <input type="text" class="apply-textarea" placeholder="Enter Coupon Code Here">
                <button class="button apply">Apply</button>
            </div>
            <div class="checkout-container">
                <div class="total">
                    <span>Subtotal</span>
                    <span>Tax</span>
                    <span>Total</span>
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