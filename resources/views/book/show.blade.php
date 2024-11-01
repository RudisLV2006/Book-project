<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show book</title>
</head>

<body>
    <div style="color:blue; width: 300px; height:100px; text-align:center; margin:auto">
        <h1>{{$book->title}}</h1>
        <p>Book released at {{$book->release_date}}</p>
    </div>
</body>

</html>