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
            <h3>本文</h3>
            <p>{{ $post->body }}</p>
        </div>
    </div>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>
<?php

?>