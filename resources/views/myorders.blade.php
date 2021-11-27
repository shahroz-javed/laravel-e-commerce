@extends("master")

@section("product")
<div class=" my-5 custom-product">
    <div class="col-sm-4">
        <a href="#">filter</a>
    </div>

    <div class="col-sm-12">
        <div class="trending-wrapper container-fluid">
            <h2>My Orders</h2>

            @foreach ($orders as $item)
            <div class="row my-3 align-items-center cart-list-divider border border-bottom-1">
                <div class=" col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <div class="searched-item">
                            <img class="trending-img" src="{{$item->gallery}}" alt="{{$item->name}}" width="100%" height="500">
                        </div>
                    </a>
                </div>
                <div class=" col-sm-3">
                    <h2>name: {{$item->name}}</h2>
                    <p>status: {{$item->status}}</p>
                    <p>$ {{$item->price}}</p>
                    <p>address {{$item->address}}</p>
                    <p>payment status: {{$item->payment_stauts}}</p>
                    <p>payment_method {{$item->payment_method}}</p>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection("product")