<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='comments'>
            @foreach ($comments as $comment)
                <div class='comment'>
                    <a href="/comments/{{ $comment->id }}"><h2>ユーザー名</h2></a>
                    <p class='thought'>{{ $comment->thought }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
