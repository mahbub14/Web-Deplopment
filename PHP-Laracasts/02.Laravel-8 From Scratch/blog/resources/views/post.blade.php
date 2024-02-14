<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    <article>
       <h1> {{ $post->title }}</h1>
    </article>
    <div>
    {!! $post->body !!}
    </div>
    <a href="/">Go Back</a>

</body>

</html>