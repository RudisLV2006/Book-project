<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>
</head>

<body>
    <h1>Index</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{$book->title}}, {{$book->release_date}}</li>
        @endforeach
    </ul>

</body>

</html>