<!DOCTYPE html>
<html>
    <head>
        <!-- Basic -->
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="images/favicon.png" type="">
        <title>Famms - Fashion HTML Template</title>
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
        <!-- font awesome style -->
        <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

         <style type="text/css">
            
         </style>

    </head>

    <body>
    @include('home.header') 
        <div class="container" style=" margin-top: 100px;" >                            
            <div class="row">
               <div class="col-6">
                  <img src="/product/{{$product->image}}"  style="width:250px;">
               </div>

               <div class="col-6" >
                  <h5 style="font-family: fantasy;">
                     {{$product->title}}
                  </h5>

                  @if($product->discount_price!=null)
                     <h5 style="color: red">
                        Discount price
                        <br>
                        ${{$product->discount_price}}
                     </h5>

                     <h6 style="text-decoration:line-through; color:blue">
                        Price
                        <br>
                        ${{$product->price}}
                     </h6>
                  @else
                     <h6 style="color: blue">
                        Price
                        <br>
                        ${{$product->price}}
                     </h6>
                  @endif
                
                  <h6>Product category: <span style="font-family: cursive;">{{$product->category}}</span></h6>
                  <h6>Product description: <span style="font-family: cursive;">{{$product->description}}</span></h6>
                  <h6>Quantity: <span style="font-family: cursive;">{{$product->quantity}}</span></h6>

                  <form action="{{url('add_cart', $product->id)}}" method="POST">
                     @csrf
                     <div class="row">
                        <div class="col-md-4">
                           <input type="number" name="quantity" value="1" min="1" style="width: 100%">
                        </div>
                        <div class="col-md-4">
                           <input type="submit" value="Add to cart">  
                        </div>
                     </div>                       
                  </form>
               </div> 

            </div>            
        </div>

        @include('home.footer')

        <div class="cpy_">
            <p class="mx-auto">?? 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

                Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
            </p>
        </div>
        
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>

    </body>
</html>