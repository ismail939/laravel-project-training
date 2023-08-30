<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <fieldset>
        <legend>
            Category
        </legend>
        <table>
            <tr>
                <td>Category Name</td>
                <td>{{ $category->name }}</td>
            </tr>

        </table>
    </fieldset>

    <FIELdset>
        <legend>
            products
        </legend>
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Availability</th>
                </tr>
            </thead>
            @foreach ($category->products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->availability}}</td>
                </tr>
            @endforeach
        </table>
    </FIELdset>
   
</body>

</html>
