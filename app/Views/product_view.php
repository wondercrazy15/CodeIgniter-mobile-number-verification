<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Product List</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product1 as $row): ?>
                <tr>
                    <?php echo"1212 <pre>"; print_r($row); ?>
                    <td><?php //echo $row['product_name'];  ?></td>
                    <td><?php //echo $row['product_price'];  ?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    <div>
        <form action="/product/add_new" method="post">
            <button type="submit">ADD NEW</button>
        </form>
    </div>
</body>
</html>