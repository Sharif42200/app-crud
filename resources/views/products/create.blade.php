<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" placeholder="Quantity">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" id="price" placeholder="Price">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</body>
</html>
