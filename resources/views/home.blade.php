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
            <div class="flex items-center flex-shrink-0 text-white">
                <svg width="24" height="29" viewBox="0 0 24 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.43885 27.7524L23.8585 14.3527L6.43885 0.952956C3.80837 -1.07049 2.78884e-06 0.804756 2.49871e-06 4.12345L7.10175e-07 24.5819C4.20045e-07 27.9006 3.80837 29.7758 6.43885 27.7524Z" fill="white"/>
                </svg>
                <svg width="25" height="29" viewBox="0 0 25 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.2781 0.952959L0.858459 14.3527L18.2781 27.7524C20.9086 29.7758 24.7169 27.9006 24.7169 24.5819V4.12345C24.7169 0.804758 20.9085 -1.07048 18.2781 0.952959Z" fill="white"/>
                </svg>
                <p class="font-semibold text-xl tracking-tight ml-4">Laravel
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
