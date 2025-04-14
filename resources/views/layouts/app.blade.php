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

<body class="bg-[#F1F2F9] min-h-screen antialiased font-quick">
    <div>
        <div class="relative outline-none">
            <header class="absolute top-0 inset-x-0 w-full z-50">
                <nav class="container mx-auto px-8 py-6">
                    <div class="flex items-center mr-4">
                        <a href="{{ url('/')  }}">
                            <x-app-logo />
                        </a>
                        <div class="w-full md:block md:w-auto md:ml-7 md:mr-auto" id="navbar-default">
                            <ul
                                class="hidden font-medium md:flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
                                <li>
                                    <a href="" class="font-semibold text-white text-sm md:text-lg md:hover:text-red-50 "
                                        aria-current="page">Home</a>
                                </li>
                                <li>
                                    <a href="" wire:navigate
                                        class="font-semibold text-white text-sm md:text-lg  md:hover:text-red-50 md:p-0 ">Pages</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="font-semibold text-white text-sm md:text-lg  md:hover:text-red-50 md:p-0 ">Portfolio</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="font-semibold text-white text-sm md:text-lg  md:hover:text-red-50 md:p-0 ">Blog</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="font-semibold text-white text-sm md:text-lg  md:hover:text-red-50 md:p-0 ">Contacts</a>
                                </li>
                            </ul>
                        </div>

                        <div class="hidden w-full md:block md:w-auto md:ml-25" id="navbar-default">
                            <a href="#"
                                class="block px-4 py-2 font-semibold text-white text-sm md:text-lg rounded-full bg-[#4703FF]">Let's talk</a>
                        </div>
                    </div>
                </nav>
            </header>

            <main class="absolute top-0 inset-x-0 w-full z-40">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>