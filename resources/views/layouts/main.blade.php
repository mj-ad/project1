<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-[#F1F2] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <div>
        <div class="relative outline-none">
            <header class="absolute top-0 inset-x-0 w-full z-50">
                <nav class="container mx-auto p-4 ">
                    <div class="flex items-center">
                        <a href="{{ url('/')  }}">
                            <img src="{{ asset('images/logo.webp') }}" alt="Logo" style="width: auto; height: 20px; 
                @media (min-width: 640px) { height: 14px; } 
                @media (min-width: 768px) { height: 16px; } 
                @media (min-width: 1024px) { height: 18px; } 
                @media (min-width: 1280px) { height: 20px; }">
                        </a>
                        <button data-collapse-toggle="navbar-default" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                            aria-controls="navbar-default" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                        <div class="hidden w-full md:block md:w-auto md:ml-auto" id="navbar-default">
                            <ul
                                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                                <li>
                                    <a href=""
                                        class="font-semibold text-white text-sm md:text-xl md:hover:text-red-50 "
                                        aria-current="page">Home</a>
                                </li>
                                <li>
                                    <a href="" wire:navigate
                                        class="font-semibold text-white text-sm md:text-xl  md:hover:text-red-50 md:p-0 ">Events</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="font-semibold text-white text-sm md:text-xl  md:hover:text-red-50 md:p-0 ">Talks</a>
                                </li>
                            </ul>
                        </div>

                        <div class="hidden w-full md:block md:w-auto md:ml-25" id="navbar-default">
                            <ul class="flex flex-col items-center p-4 gap-6 md:p-0 md:flex-row ">

                                <li>
                                    <a href=""
                                        class="font-semibold text-white text-sm md:text-xl md:hover:text-red-50">Signin</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-3 font-semibold text-white text-sm md:text-xl bg-red-50 rounded-lg hover:bg-gray-100 hover:text-red-50">Create
                                        An Event</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <main class="absolute top-0 inset-x-0 w-full z-40">
                
            </main>
        </div>
    </div>
</body>

</html>