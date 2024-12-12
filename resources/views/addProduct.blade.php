@extends("layout")


@section("addProduct")

        <form class="mb-3 mt-3" method="POST" action="/admin/add-product">

            {{ csrf_field() }}
            @if($errors->any())
                <p class="bg-info">Error: {{ $errors->first() }}</p>
            @endif

            <h1>Insert Product </h1>
            <div class="form-group mb-1">
                <label for="productName">Product Name</label>
                <input type="text" name="name" class="form-control" id="productName" aria-describedby="Enter product name " placeholder="Enter product name">
            </div>

            <div class="form-group mb-1">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" aria-describedby="Enter product description " placeholder="Enter product description">
            </div>

            <div class="form-group mb-1">
                <label for="productAmount">Amount</label>
                <input type="number" name="amount" class="form-control" id="productAmount" aria-describedby="Enter product amount " placeholder="Enter product amount">
            </div>

            <div class="form-group mb-1">
                <label for="productPrice">Price</label>
                <input type="number" name="price" class="form-control" id="productPrice" aria-describedby="Enter product price " placeholder="Enter product price">
            </div>


            <button type="submit" class="btn btn-primary">Add</button>
        </form>

    @endsection



