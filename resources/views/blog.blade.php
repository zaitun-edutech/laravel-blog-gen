<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Blog Awal</h1>

    <article>
        @foreach ($post as $p)
        <h3>{{ $p['keteerangan']}}</h3>
        <div>
           <img height="350px" src="{{ $p['image'] }}"> 
        </div>
            
        @endforeach
    </article>
</body>
</html>