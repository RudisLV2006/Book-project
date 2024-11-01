<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new book</title>
</head>

<body>
    <form action="/store" method="post">
        <label for="title">Enter book title:</label>
        <input type="text" name="title">
        <br>
        <label for="date">Enter book release date:</label>
        <input type="text" name="date">
        <input type="submit" value="Submit">
    </form>
</body>

</html>