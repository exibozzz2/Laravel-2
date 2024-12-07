@extends("layout")

@section("pageTitle")
    Products
@endsection

@section("productsList")
    @foreach($brands as $brand => $models )
        @foreach($models as $model)
            @if($brand == 'Toyota' || $brand == 'Volkswagen' || $brand == 'Mazda')
                <p># {{ $brand }} - {{ $model }}      # ON SALE</p>

            @else
                <p>{{ $brand }} - {{ $model }}</p>
            @endif



        @endforeach
    @endforeach
@endsection


@section("textInfo")
    <h2>This text is displayed only in products blade</h2>
@endsection
