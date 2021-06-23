<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My sites</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body>
    <div class="container mx-auto my-2 pt-6 px-4">
        <h1 class="text-3xl mb-4 border-b-2">My sites</h1>

        <h2 class="text-2xl mt-6 uppercase">Linked</h2>
        <ul class="list-disc">
            @foreach ($linked as $site)
                <x-site-in-list :site="$site"></x-site-in-list>
            @endforeach
        </ul>

        <h2 class="text-xl mt-6 uppercase">Parked</h2>
        <ul class="list-disc">
            @foreach ($parked as $site)
                <x-site-in-list :site="$site"></x-site-in-list>
            @endforeach
        </ul>
    </div>
</body>
</html>
