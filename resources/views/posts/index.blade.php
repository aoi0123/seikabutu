<x-app-layout>
        <h1 class='text-red-500'>スイーツ日記</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                   <a href="/posts/{{ $post->id }}"> <h2 class='name text-4xl'>{{ $post->name }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='wants'>
                <div class='want'>
                    <h3 class='body'>
                        <a href="/wants/">リクエスト一覧</a>
                    </h3>
                </div>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
</x-app-layout>