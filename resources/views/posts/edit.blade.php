<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>編集画面</title>
    </head>
    <body>
        <h1 class="title">{{ $post->name }}の編集</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="content_name">
                <h2>レシピ名</h2>
                <input type="text" name="post[name]" value="{{ $post->name }}">
            </div>
            <div class="body">
                <h2>おすすめポイント</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            <div class="time">
                <h2>調理時間</h2>
                <input type='integer' name='post[time]' value="{{ $post->time}}">
            </div>
            <div class="calorie">
                <h2>カロリー</h2>
                <input type='integer' name='post[calorie]' value="{{ $post->calorie }}">
            </div>
            <div class="cost">
                <h2>コスト</h2>
                <input type='integer' name='post[cost]' value="{{ $post->cost }}">
            </div>
            
            <input type="submit" value="保存"/>
        
            </form>
        </div>
    </body>
</html>