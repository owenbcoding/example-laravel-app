<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/normal.css"> --}}
    {{-- <script src="/app.js"></script> --}}
    @vite('resources/css/app.css')
    <title>My Blog</title>
</head>

<body class="bg-white text-black max-w-xl m-auto font-sans">
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
    {{-- <article class="pb-10 border-b-2 border-slate-400">
        <h1 class="text-3xl font-bold mb-10 mt-10 text-center">
            <a href="/posts/my-first-post">First Post!</a>
        </h1>
        <p class="leading-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque esse perspiciatis
            doloribus impedit. Deserunt rerum harum eveniet, molestiae recusandae corrupti cumque nisi voluptatibus
            voluptatum aliquam soluta autem, exercitationem nobis vel debitis magnam error dignissimos! Sapiente ea iste
            voluptatum pariatur iure mollitia quo fugiat eveniet deserunt, illo incidunt perferendis vitae natus
            cupiditate dolores earum eaque numquam culpa omnis. Minus, dolores quidem aut blanditiis eos consequatur
            aperiam, fugit perspiciatis ab dolorum facilis quae inventore adipisci veritatis asperiores ipsam ipsa
            aspernatur! Cumque deserunt expedita consequatur dolore molestias sapiente ea nisi minima laudantium fugit
            accusantium, minus itaque quod earum ratione quis accusamus vitae eius.</p>
    </article>
    <article class="pb-10 border-b-2 border-slate-400">
        <h1 class="text-3xl font-bold mb-10 mt-10 text-center">
            <a href="/posts/my-second-post">Second Post!</a>
        </h1>
        <p class="leading-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque esse perspiciatis
            doloribus impedit. Deserunt rerum harum eveniet, molestiae recusandae corrupti cumque nisi voluptatibus
            voluptatum aliquam soluta autem, exercitationem nobis vel debitis magnam error dignissimos! Sapiente ea iste
            voluptatum pariatur iure mollitia quo fugiat eveniet deserunt, illo incidunt perferendis vitae natus
            cupiditate dolores earum eaque numquam culpa omnis. Minus, dolores quidem aut blanditiis eos consequatur
            aperiam, fugit perspiciatis ab dolorum facilis quae inventore adipisci veritatis asperiores ipsam ipsa
            aspernatur! Cumque deserunt expedita consequatur dolore molestias sapiente ea nisi minima laudantium fugit
            accusantium, minus itaque quod earum ratione quis accusamus vitae eius.</p>
    </article>
    <article class="pb-10 border-b-2 border-slate-400">
        <h1 class="text-3xl font-bold mb-10 mt-10 text-center">
            <a href="/posts/my-third-post">Third Post!</a>
        </h1>
        <p class="leading-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque esse perspiciatis
            doloribus impedit. Deserunt rerum harum eveniet, molestiae recusandae corrupti cumque nisi voluptatibus
            voluptatum aliquam soluta autem, exercitationem nobis vel debitis magnam error dignissimos! Sapiente ea iste
            voluptatum pariatur iure mollitia quo fugiat eveniet deserunt, illo incidunt perferendis vitae natus
            cupiditate dolores earum eaque numquam culpa omnis. Minus, dolores quidem aut blanditiis eos consequatur
            aperiam, fugit perspiciatis ab dolorum facilis quae inventore adipisci veritatis asperiores ipsam ipsa
            aspernatur! Cumque deserunt expedita consequatur dolore molestias sapiente ea nisi minima laudantium fugit
            accusantium, minus itaque quod earum ratione quis accusamus vitae eius.</p>
    </article> --}}
</body>

</html>
