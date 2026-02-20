<!DOCTYPE html>
<html>
<head>
    <title>{{ $theme }} Products</title>
</head>
<body>
    <h1>{{ $theme }} Product List</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Brand</th>
                <th>Price (₱)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['brand'] }}</td>
                    <td>{{ number_format($product['price'], 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>