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
    <h1>Modifica {{$article->title}}</h1>
    <form action="{{route('articles.update',$article)}}" method="post">
    @csrf
    @method('PUT')
        <div class="form_group">
            <label for="title">Titolo</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}" required>
        </div>
        <div class="form_group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3"  required>{{$article->body}}</textarea>
        </div>
        <div class="form_group">
            <label for="tag_id">Tag</label>
            <select name="tag_id" id="tag_id" class="form_control">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>

            @endforeach
            </select>
        </div>
        <div class="form_group">
            <label for="category_id">category</label>
            <select name="category_id" id="category_id" class="form_control">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>