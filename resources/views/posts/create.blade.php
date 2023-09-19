<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
    </head>
    <body>
        <h1>レシピ</h1>
        <form action="/posts" method="POST">
        @csrf
        <div class="name">
            <h2>レシピ名</h2>
            <input type="text" name="post[name]" placeholder="レシピ名"/>
        </div>
        <div class="body">
            <h2>おすすめポイント</h2>
            <textarea name="post[body]" placeholder="レシピの特徴を伝えよう"></textarea>
        </div>
        <div class="time">
            <h2>調理時間</h2>
            <textarea name="post[time]" placeholder="調理時間"></textarea>
        </div>
        <div class="calorie">
            <h2>カロリー</h2>
            <textarea name="post[calorie]" placeholder="カロリー"></textarea>
        </div>
        <div class="cost">
            <h2>コスト</h2>
            <textarea name="post[cost]" placeholder="コスト"></textarea>
        </div>
        <div class="cost">
            <h2>材料</h2>
            <textarea name="post[resource]" placeholder="材料"></textarea>
        </div>
        <div class="cost">
            <h2>工程</h2>
            <textarea name="post[step]" placeholder="工程"></textarea>
        </div>
        
        <input type="submit" value="保存"/>
        
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>