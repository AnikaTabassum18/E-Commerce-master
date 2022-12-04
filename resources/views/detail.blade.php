@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$trending_products['gallery']}}" alt="Image">
        </div>
        <div class="col-sm-6">
            <a href="/products">
            Go Back...
            </a>
            <h2>Name : {{$trending_products['name']}}</h2>
            <h3>Price : {{$trending_products['price']}}</h3>
            <h4>Category : {{$trending_products['category']}}</h4>
            <p>Description : {{$trending_products['description']}}</p>
            <br><br>
            <button type="submit" class="btn btn-success">Add Cart</button>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>

</div>
@endsection
