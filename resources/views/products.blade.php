@extends("layout")

@section("pageTitle")
    Products
@endsection

@section("allProducts")
    <h1>List of All Products</h1>

    @foreach($allProducts as $product)
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

@section("fiveNewestProducts")
    @foreach($fiveNewestProducts as $newProduct)
        <div class="card" style="width: 18rem;">
            <img src="{{asset("../../public/images/product.jpg")}}" class="card-img-top" alt="Product Image">
            // Nisam uspeo image preko asseta :D  ... fuck
            <div class="card-body">
                <h5 class="card-title">{{ $newProduct->name }}</h5>
                <p class="card-text">{{ $newProduct->description }}</p>
                <p>Amount: {{ $newProduct->amount }}</p>
                <p>Price: {{ $newProduct->price }}</p>
            </div>
        </div>
    @endforeach
@endsection


@section("textInfo")
    <h2>This text is displayed only in products blade</h2>
@endsection
