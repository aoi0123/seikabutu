<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $post->name }}の作り方</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>{{ $post->name }}</h3>
                <p>{{ $post->body }}</p>
                <p>{{ $post->time }}</p>
                <p>{{ $post->calorie }}</p>
                <p>{{ $post->cost }}</p>
                <p>{{ $post->resource }}</p>
                <p>{{ $post->step }}</p>
                <p>{{ $post->user_id }}</p>
            </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
        </div>
        <form action={{"/comment/".$post->id}} method="post">
            @csrf
            <textarea name='thought'></textarea>
            <button type='submit'>送信</button>
            
        </form>
        <div class='comments'>
            @foreach ($post->comments as $comment)
                <div class='comment'>
                    <h2>{{$comment->user->name}}</h2>
                    <p class='thought'>{{ $comment->thought }}</p>
                </div>
                <div>
                    @if($post->is_liked_by_auth_user())
                        <a href="{{ route('post.unlike', ['post' => $post->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $post->likes->count() }}</span></a>
                    @else
                        <a href="{{ route('post.like', ['post' => $post->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $post->likes->count() }}</span></a>
                    @endif
                </div>
            @endforeach
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>