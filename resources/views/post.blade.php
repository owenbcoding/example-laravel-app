<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>

    <article class="bg-white text-black max-w-xl m-auto font-sans pb-10 border-slate-400">
        {!! $content !!}
    </article>

</body>
</html>