@extends("master")

@section("product")
<div class=" my-5 custom-product d-flex align-content-center">


    <div class="trending-wrapper container-fluid">
        <h2>Serached products</h2>
        @foreach ($products as $item)
        <a href="detail/{{$item['id']}}">
            <div class="searched-item">
                <img class="trending-img" src="{{$item['gallery']}}" alt="{{$item['name']}}" width="100%" height="500">
                <div class="">
                    <h2>{{$item['name']}}</h2>
                    <p>{{$item['description']}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection("product")