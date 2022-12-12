@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <a href="">Filter</a>
        <h3>Cart List</h3>
        <!-- Wrapper for slides -->
        <div class="trending-wrapper">
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
                        <h5>{{$item->description}}</h5>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/removeProduct/{{$item->cart_id}}" class="btn btn-danger">Remove</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
