<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>Crea un nuovo post</h1>
    <form action="{{route('posts.store')}}" method="post">
    @csrf
        <div class="form_group">
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title" id="title" required>
        </div>
        <div class="form_group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>