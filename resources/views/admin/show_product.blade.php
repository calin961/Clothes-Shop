<!DOCTYPE html>
<html lang="en">
    <head>
    @include('admin.css')

    <style type="text/css">

        .center{
            margin:auto;
            width:50%;
            border: 2px solid white;
            text-align:center;
            margin-top: 40px;
        }

        .font_size{
            text-align:center;
            font-size:40px;
            padding-top:20px;
        }

        .img_size{
            width:150px;
            height:150px;
        }

        .th_color{
            background:skyblue;
        }

        .th_dg{
            padding:30px;
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

                    <h2 class="font_size">All products</h2>

                    <table class="center">
                        <tr class="th_color">
                            <th class="th_dg">Product title</th>
                            <th class="th_dg">Description</th>
                            <th class="th_dg">Quantity</th>
                            <th class="th_dg">Category</th>
                            <th class="th_dg">Price</th>
                            <th class="th_dg">Discount price</th>
                            <th class="th_dg">Image</th>
                            <th class="th_dg">Delete</th>
                            <th class="th_dg">Edit</th>
                        </tr>

                        @foreach($product as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                                <img class="img_size" src="/product/{{$product->image}}" alt="" class="">
                            </td>
                            <td>
                                <a href="{{url('delete_product', $product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                            <td>
                                <a href="{{url('update_product', $product->id)}}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>

            @include('admin.script')
        </div>
    </body>
</html>
