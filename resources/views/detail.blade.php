@extends('master')
@section("detail")
<div class="container" style="height: 80vh;">
    <div class="row mt-5">
        <div class="col-sm-6 col-lg-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="" />
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h5>Category: {{$product['category']}}</h5>
            <h2>Details:</h2>
            <p>{{$product['description']}}</p>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name='product_id' value="{{$product['id']}}" />
                <button class="btn btn-primary">Add To CART</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>

</div>

@endsection("detail")