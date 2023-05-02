<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" value="{{ $post->title }}"/>
                <!-- <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p> -->
            </div>
            <div class="body">
                <h2>Body</h2>
                <!-- <input type="text" name="post[body]" value="{{ $post->body }}"/> -->
                <textarea name="post[body]">{{ $post->body }}</textarea>

                <!-- <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p> -->
            </div>
            <div class="categories">
                <h2>Categories</h2>
                <select name="post[category_id]">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @if ($post->category_id === $category->id)
                                selected
                            @endif
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>