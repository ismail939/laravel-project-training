<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <fieldset>
        <legend>
            Orders
        </legend>
        <table>
            <thead>
                <tr>
                    <th>Price</th>
                    <th>User Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->price}}</td>
                        <td>{{$order->user->name}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </fieldset>
</body>
</html>
