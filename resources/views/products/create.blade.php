<h2>ADD Products</h2>   
<form action="/products" method="post">
    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price"><br><br>
    <input type="submit" value="Submit">

</form>
