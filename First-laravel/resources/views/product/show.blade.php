<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/show.css')}}">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product price</th>
                <th>Product availablity</th>
                <th>Category ID</th>
                <th>Actions</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->availability}}</td>
                <td>{{$product->category_id}}</td>
                <td><a class="button" href="{{route('product.index')}}">back</a></td>
            </tr>

        </tbody>
    </table>

</body>
</html>
