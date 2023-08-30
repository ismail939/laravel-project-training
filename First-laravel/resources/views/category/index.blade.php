<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>


        @foreach ($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td><form action="{{ route('category.show', $category->id) }}" method="get">
                <button>Show</button>
            </form></td>
        </tr>
        @endforeach

    </table>
</body>
</html>
