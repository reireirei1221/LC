<?php

?>
<!DOCTYPE  html>
<html>
<head>
	<title>ブログ投稿一覧の表示</title>
</head>
<body>
	<h1>Blog Name</h1>
	<div class='posts'>
	@foreach ($posts as $post)
			<div class='post'>
				<h2 class='title'>{{$post->title}}</h2>
				<p class='body'>{{$post->body}}</p>
				<p class='created_at'>{{$post->created_at}}</p>
				<p class='updated_at'>{{$post->updated_at}}</p>
			</div>
	@endforeach
	</div>
	<div class='paginate'>
		{{ $posts->links() }}
	</div>
</body>
</html>
<?php

?>
