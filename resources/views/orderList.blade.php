@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <a href="">Filter</a>
        <!-- Wrapper for slides -->
        <div class="trending-wrapper">
            <h3>Order List</h3>
            
            @foreach ($products as $item)
            <div class="row searched-item cart_list_div">
                <div class="col-sm-4">
                    <a href="details/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <h5>Delivery status : {{$item->status}}</h5>
                        <h5>Payment status : {{$item->status}}</h5>
                        <h5>Delivery address: {{$item->address}}</h5>
                        <h5>Price : {{$item->price}}</h5>
                    </div>
                    </a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection
