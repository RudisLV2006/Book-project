<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit book</title>
</head>

<body>
    <a href="/book">Return</a>
    <form action="/book/{{$book->id}}" method="post">
        @csrf
        @method('PUT')
        <div style="text-align:center">
            <label for="title">Book title:</label>
            <input type="text" name="title">
            <br>
            <label for="date">Book release date:</label>
            <input type="text" name="date">
            <hr>
            <input type="submit" value="Agree" style="font-size:35px;">
        </div>

    </form>
</body>

</html>