<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="css/app.css">
   
</head>
<body>
    @foreach($posts as $post)
    
    <article class="{{$loop->even?'foobar':''}}">
      <h1>
        <a href="/posts/{{ $post->slug }}">
        {{ $post->title}}
        </a>
    </h1>

      <div>
        {{ $post->excerpt }}
      </div>
    </article>
    @endforeach
</body>
</html>