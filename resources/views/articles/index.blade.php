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
            <h1>Articles</h1>
            <a href="{{route('articles.create')}}">Crea un nuovo article</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>BODY</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->body}}</td>
                        <td>
                            <a href="{{route ('articles.show', ['article'=> $value->id])}}">View</a>
                            <a href="{{route ('articles.edit', ['article'=> $value->id])}}">Edit</a>
                            <form action="{{route ('articles.destroy', ['article'=> $value->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </body>
</html>