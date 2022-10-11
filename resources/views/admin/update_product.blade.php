<!DOCTYPE html>
<html lang="en">
    <head>
    
   
    @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color:black;
            padding-bottom:20px;
        }

        label{
            display: inline-block;
            width: 200px;
        }

        .div_design{
            padding-bottom: 15px;
        }
    </style>

    </head>
    <body>
        <div class="container-scroller">
        
            @include('admin.sidebar')
            @include('admin.header')

            <div class="main-panel">
                <div class="content-wrapper">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif

                    <div class="div_center">
                        <h1 class="font_size">Update product</h1>

                        <form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="div_design">
                                <label>Product title:</label>
                                <input class="text_color" type="text" name="title" placeholder="Write a title" required=""
                                value="{{$product->title}}">
                            </div>

                            <div class="div_design">
                                <label>Product description:</label>
                                <input class="text_color" type="text" name="description" placeholder="Write a description" required=""
                                value="{{$product->description}}">
                            </div>

                            <div class="div_design">
                                <label>Product price:</label>
                                <input class="text_color" type="number" name="price" placeholder="Write a price" required=""
                                value="{{$product->price}}">
                            </div>

                            <div class="div_design">
                                <label>Discount price:</label>
                                <input class="text_color" type="number" name="dis_price" placeholder="Write a discount"
                                value="{{$product->discount_price}}">
                            </div>

                            <div class="div_design">
                                <label>Product quantity:</label>
                                <input class="text_color" type="number" name="quantity" min="0" placeholder="Write quantity" required=""
                                value="{{$product->quantity}}">
                            </div>                        

                            <div class="div_design">
                                <label>Product category:</label>
                                <select class="text_color" name="category" required="" >
                                    <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                    @foreach($category as $category)
                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="div_design">
                                <label>Current product image:</label>
                                <img style="margin:auto" src="/product/{{$product->image}}" height="100" width="100">
                            </div>

                            <div class="div_design">
                                <label>Change product image:</label>
                                <input type="file" name="image">
                            </div>

                            <div class="div_design">                            
                                <input type="submit" value="Update product" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            @include('admin.script')
        </div>
    </body>
</html>
