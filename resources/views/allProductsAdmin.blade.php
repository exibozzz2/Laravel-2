@extends("layout")


@section("allProductsAdmin")
    @foreach($allProductsAdmin as $product)
        <div class="card" style="width: 18rem;">
            <img src="{{asset("../../public/images/product.jpg")}}" class="card-img-top" alt="Product Image">

            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p>Amount: {{ $product->amount }}</p>
                <p>Price: {{ $product->price }}</p>
            </div>
        </div>
    @endforeach
@endsection
