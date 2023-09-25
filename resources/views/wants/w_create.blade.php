<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>リクエスト作成</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/wants" method="POST">
            @csrf
                <h2>Title</h2>
            <div class="want">
                <h2>作ってほしいお菓子</h2>
                <textarea name="want[body]"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>