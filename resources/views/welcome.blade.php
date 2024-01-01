<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    <title>Qwords</title>
</head>
<body>
    {{-- Hero --}}
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            {{-- Left Col --}}
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">
                    What business are you?
                </p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Main Hero Message to sell yourself!
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    Sub-hero message, not too long and not too short. Make it just right!
                </p>
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Subscribe
                </button>
            </div>
            {{-- Right Col --}}
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50" src="" alt="">
            </div>
        </div>
    </div>
    {{-- /Hero --}}
</body>
</html>
