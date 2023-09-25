<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スイーツ日記</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>スイーツ日記</h1>
        <a href='/wants/create'>create</a>
        <div class='wants'>
            @foreach ($wants as $want)
                <div class='post'>
                   <a href="/wants/{{ $want->id }}"> <h2 class='name'>{{ $want->name }}</h2></a>
                    <p class='body'>{{ $want->body }}</p>
                    <form action="/wants/{{ $want->id }}" id="form_{{ $want->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $want->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='wants'>
                <div class='want'>
                    <h3 class='body'>
                        <a href="/wants/create">リクエスト</a>
                    </h3>
                </div>
        </div>
        <div class='paginate'>
            {{ $wants->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>