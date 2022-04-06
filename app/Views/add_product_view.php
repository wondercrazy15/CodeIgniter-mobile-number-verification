<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <form action="/product/save" method="post">
        <input type="text" name="product_name" placeholder="product name">
        <input type="text" name="product_price" placeholder="product price">
        <button type="submit">Add</button>
    </form>
    
</body>
</html>