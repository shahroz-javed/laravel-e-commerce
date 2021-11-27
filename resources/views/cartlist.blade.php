@extends("master")

@section("product")
<div class=" my-5 custom-product">
    <div class="col-sm-4">
        <a href="#">filter</a>
    </div>

    <div class="col-sm-12">
        <div class="trending-wrapper container-fluid">
            <h2>products in your cart</h2>
            <a class="btn btn-success" href="ordernow">Order></a>
            @foreach ($products as $item)
            <div class="row my-3 align-items-center cart-list-divider border border-bottom-1">
                <div class=" col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <div class="searched-item">
                            <img class="trending-img" src="{{$item->gallery}}" alt="{{$item->name}}" width="100%" height="500">
                        </div>
                    </a>
                </div>
                <div class=" col-sm-3">
                    <h2>{{$item->name}}</h2>
                    <p>{{$item->description}}</p>
                    <p>{{$item->price}}</p>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove from cart</a>


                </div>
            </div>
            @endforeach
            <a class="btn btn-success" href="ordernow">Order Now</a>
        </div>
    </div>
</div>

@endsection("product")