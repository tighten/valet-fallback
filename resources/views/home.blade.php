<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My sites</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body>
    <nav class="bg-gradient-to-b from-purple-500 to-purple-700 p-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <p class="font-semibold text-xl tracking-tight">Laravel
                    <span class="font-extralight">Valet</span>
                </p>
            </div>
        </div>
    </nav>
    <nav class="bg-white p-6 border-b border-gray-200 shadow">
        <div class="max-w-7xl mx-auto">
            <p class="text-3xl">Did you mean
                <span class="font-semibold text-purple-800 underline">symposium</span>
            </p>
        </div>
    </nav>
    <div class="p-4 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl mt-6 font-semibold font-sans">Linked</h2>
            @foreach ($linked as $site)
                <div class="bg-white mt-4 py-6 rounded-md border border-gray-200 shadow">
                    <x-site-in-list :site="$site"></x-site-in-list>
                </div>
            @endforeach

            <h2 class="text-2xl mt-10 font-semibold font-sans">Parked</h2>
            @foreach ($parked as $site)
                <div class="bg-white mt-4 py-6 rounded-md border border-gray-200 shadow">
                    <x-site-in-list :site="$site"></x-site-in-list>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
