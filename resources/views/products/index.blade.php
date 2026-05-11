
<h2>Products List</h2>
<a href="/products/create">Add New Product</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <a href="/products/{{ $product->id }}/edit">Edit</a>
            <a href="/products/{{ $product->id }}/delete">Delete</a>
        </td>
    </tr>
    @endforeach