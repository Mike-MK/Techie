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

           <div class="hero-container">
               <div class="hero-copy">
                   <h1>Techie</h1>
                   <p>One stop shop for all your tech needs!</p>
                   <div class="hero-buttons">
                       <a href="#" class="button button-white">Button1</a>
                       <a href="#" class="button button-white">Button1</a>
                   </div> 
               </div><!--end of hero-copy-->
               <div class="hero-image">
                    <img src="img/products/laptop-1.png" alt="hero image">
                </div>

           </div><!--end hero-->
       </header>

       <div class="featured-section">
           <div class="container">
               <h1 class="text-center">CSS Grid Example</h1>

               <p class="section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio sed distinctio aspernatur esse veritatis corporis soluta repudiandae? Quia odit repudiandae deleniti eaque quisquam ipsum aliquid illum, expedita, totam voluptate non!</p>
                
               <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>

            <div class="products text-center">
                @foreach($products as $product)
                    <div class="product">
                    <a href="{{ route('shop.show', $product->slug)}}"><img src="{{ asset('img/products/'.$product->slug.".png")}}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug)}}"><span class="product-name">{{ $product-> name }}</span></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach
            </div><!--end products-->

            <div class="text-center button-container">
            <a href="{{ route('shop.index')}}" class="button">View More Products</a>
            </div>

        </div><!--end container-->

       </div><!--end featured section-->

       <div class="blog-section">
           <div class="container">
               <h1 class="text-center">From Our Blog</h1>
            
                <p class="section-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus optio praesentium inventore sed nemo nihil? Illum fugiat consequatur quam, ab ducimus laudantium magnam nesciunt eligendi accusamus consequuntur voluptates, vitae possimus.</p>

                <div class="blog-posts">
                    
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="imgblog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dicta id vitae, delectus minus, neque alias labore, doloribus deleniti praesentium dolorem inventore ea ipsa. Dicta nobis est consequuntur itaque quis.</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="imgblog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dicta id vitae, delectus minus, neque alias labore, doloribus deleniti praesentium dolorem inventore ea ipsa. Dicta nobis est consequuntur itaque quis.</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="imgblog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dicta id vitae, delectus minus, neque alias labore, doloribus deleniti praesentium dolorem inventore ea ipsa. Dicta nobis est consequuntur itaque quis.</div>
                    </div>
                  

                </div><!--end blog-posts-->
            
            </div><!--end container-->
       </div><!--end blog-section-->

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
