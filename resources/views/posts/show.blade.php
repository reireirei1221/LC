<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1 class="title">
        {{ $post->title }}
    </h1>
    <div class="content>
        <div class="content post-body">
            <h3>Title</h3>
            <p>{{ $post->title }}</p>
            <h3>Body</h3>
            <p>{{ $post->body }}</p>
        </div>
    </div>
    <div class="edit">
        <a href="/posts/{{ $post->id }}/edit">編集</a>
    </div>
    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
        @csrf
        @method('DELETE')
        <div class="delete">
            <button onclick="deletePost({{ $post->id }})">削除</button>
        </div>
    </form>

    <script>
        function deletePost(id) {
            'use strict'
            if (confirm('本当に削除していいですか？')) {
                document.getElementById('form_' + id).submit();
            }
        }
    </script>
    
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>
<?php

?>