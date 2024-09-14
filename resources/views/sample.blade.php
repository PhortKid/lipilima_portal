<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('sample.store')}}" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html>