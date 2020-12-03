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
    <link rel="stylesheet" href="{{ asset('css/shop.css')}}">
        
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
               <span>Shop</span>
               <i class="fa fa-chevron-right breadcrumb-separator"></i>
           </div>
       </div>
       <div class="shop-container">
           <div class="sidebar">
                <div class="sidebar-content">
                    <h2>More Products</h2>
                    <ul>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Tablets</a></li>
                        <li><a href="#">Mobile Phones</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
           </div><!--sidebar-->
           <div class="product-section">
               <h2>Laptops</h2>
           <div class="products">
                @foreach($products as $product)
                   <div class="product">
                   <a href="{{ route('shop.show', $product->slug)}}"><img src="{{ asset('img/products/'.$product->slug.".png")}}" alt="product"></a>
                    <a href="{{ route('shop.show', $product->slug)}}"><span class="product-name">{{ $product-> name }}</span></a>
                    <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach
           </div><!--end products-->
        </div><!--end products-section-->
       </div><!--end shop-section-->
       <footer>
           <div class="footer-content container">
               <div class="made-with">Made With <i class="fa fa-heart"></i> by Michael</div>
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
