<h2>Edit Product</h2>

<form method="POST" action="/products/{{ $product->id }}">
    @csrf
    @method('POST')
    <input type="text" name="name" value="{{ $product->name }}">
    <input type="number" name="price" value="{{ $product->price }}">

    <button type="submit">Update</button>
</form>