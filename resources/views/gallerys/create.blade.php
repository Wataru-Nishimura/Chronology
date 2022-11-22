<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>
    </head>
    <body>
        <form action="/create" method="gallery" enctype="multipart/form-data">
            <input type="file" name="image">
            {{ csrf_field() }}
            <button type="submit">アップロード</button>
        </form>
    </body>
</html>