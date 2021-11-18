<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>

<body>
    <h1>Product List</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['product_name'] }}</td>    
                <td>{{ $product['product_category'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>