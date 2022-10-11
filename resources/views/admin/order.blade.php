<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

    <style type="text/css">
        .title_dg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom:40px;
        }
        .table_dg{
            border:2px solid white;
            width:100%;
            margin:auto;            
            text-align:center;
        }
        .th_dg{
            background-color:skyblue;
        }
        .img_size{
            width:180px;
            height:100px;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
     
        @include('admin.sidebar')
        @include('admin.header')
        <div class="main-panel">        
            <div class="content-wrapper">

                <h1 class="title_dg">All orders</h1>

                <div style="padding-left: 300px; padding:=bottom: 30px;">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                        <input type="text" style="color:black" name="search" class="" placeholder="Search for something">
                        <input type="submit" value="search" class="btn btn-outline-primary">
                    </form>
                </div>

                <table class="table_dg">
                    <tr class="th_dg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment status</th>
                        <th>Delivery status</th>
                        <th>Image</th>
                        <th>Delivered</th>   
                        <th>Print PDF</th>                     
                    </tr>

                    @forelse($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img src="/product/{{$order->image}}" class="img_size">
                        </td>                        
                        <td>
                            @if($order->delivery_status=='processing')
                                <a href="{{url('delivered', $order->id)}}" 
                                    onclick="return confirm('Are you sure product is delivered?')" 
                                    class="btn btn-primary">
                                    Delivered
                                </a>
                            @else
                            <p style="color:green">Delivered</p>
                            @endif
                        </td>
                        <td>
                            <a href="{{url('print_pdf', $order->id)}}" class="btn btn-secondary">Print PDF</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td  colspan="16">No data found</td>
                    </tr>

                    @endforelse
                </table>

            </div>
        </div>
            




        @include('admin.script')
    </div>
  </body>
</html>
