<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Product</h1>
    <div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form method="post" action="{{ route('product.update', [ 'productId' => $product ] ) }}">
        @method('put')
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ $product->name }}">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" placeholder="Quantity" value="{{ $product->quantity }}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{ $product->description }}">
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" placeholder="Price" value="{{ $product->price }}">
        </div>
        <br>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
