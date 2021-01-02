<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$product-> name}}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
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
            <a href="{{route('shop.index')}}">Shop</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>{{$product-> name}}</span>
        </div>
        </div>
       <div class="product-content">
           <div class="product-image">
               <img src="{{ asset('img/products/'.$product->slug.".png")}}" alt="laptop image">
            </div> 
            <div class="product-details container">
                <h2 class="product-name">{{$product -> name}}</h2>
                <p class="product-description">{{$product-> details}}</p>
                <span class="product-price">{{$product->presentPrice()}}</span>
            <p class="product-details">{{$product->description}}</p>
               
                <form action="{{route('cart.store')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{ $product->id}}">
                    <input type="hidden" name="name" value="{{ $product->name}}">
                    <input type="hidden" name="price" value="{{ $product->price}}">

                    <div class="cart-button">
                        <button class="button">Add to Cart</button>
                    </div>
                </form>
            </div>  
        </div>
        <div class="more-products">
            @foreach($moreProducts as $mProduct)
            <div class="product">
            <a href="{{route('shop.show',$mProduct->slug)}}" class="product-image"><img src="{{ asset('img/products/'.$mProduct->slug.'.png')}}" alt="product-image"></a>
            <a href="{{route('shop.show',$mProduct->slug)}}" class="product-name"><span>{{$mProduct->name}}</span></a>
            <div class="product-price">{{$mProduct->presentPrice()}}</div>
            </div>
            @endforeach
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
