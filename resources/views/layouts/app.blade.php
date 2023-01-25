<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-background overflow-x-hidden text-gray-900 text-sm">
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}
        <header class="flex justify-between items-center px-8 py-4">
            <a href="#" class=" text-lg text-gray-900 font-bold">LetVoted</a>
            <div class="flex items-center space-x-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
                <a href="#">
                    <img src="https://img.freepik.com/free-vector/cute-happy-penguin-cartoon-icon-illustration-animal-nature-icon-concept-isolated-flat-cartoon-style_138676-2095.jpg?w=360"
                        alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class='w-70 mr-5 '>
                <div class="w-full border-2 border-own-blue rounded-md shadow-sm bg-white mt-16 boder-blue-transparent">
                    <div class="text-center px-6 py-2 pt-6">
                        <h1 class="text-xl font-bold pb-4">Add an idea</h1>
                        <p class="text-sm font-semibold">Let us know what you would like and we'll take a look over!</p>
                    </div>
                    <form action="#" method="POST" class="px-4 py-5">
                        <input type="text" name="idea" id="idea" placeholder="Your Idea"
                            class="placeholder:text-extrabold placeholder:text-gray-800 w-full border-none bg-gray-100 rounded-lg  placeholder:text-base">
                        <select name="category" id="category"
                            class="placeholder:text-extrabold placeholder:text-gray-800 w-full border-none bg-gray-100 rounded-lg mt-3 placeholder:text-base">
                            <option value="category1">Category1</option>
                            <option value="category2">Category2</option>
                            <option value="category3">Category3</option>
                            <option value="category4">Category4</option>
                            <option value="category5">Category5</option>
                        </select>
                        <textarea name="message" id="message"
                            class="placeholder:text-extrabold placeholder:text-gray-800 w-full border-none bg-gray-100 rounded-lg mt-3 placeholder:text-base"
                            cols="30" rows="3" placeholder="Describe your Idea"></textarea>
                        <div class="flex justify-between mt-6">
                            <button class="flex items-center py-3 px-6 rounded-md justify-center font-bold bg-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" .
                                        d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>
                                Attach
                            </button>
                            <button
                                class="flex items-center py-3 bg-own-blue text-white px-6 rounded-md justify-center font-bold">

                                Submit
                            </button>
                        </div>
                </div>
            </div>

            <div class='w-175 '>

                <div class="flex justify-between items-center">
                    <ul class="flex space-x-3 uppercase text-gray-900 text-xs font-semibold pb-3 border-b-4 ">
                        <li>
                            <a href="#" class="border-b-4 pb-3 border-blue-500">All Ideas (87)</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-400 transition ease-in duration-150  border-b-4 pb-3 hover:border-blue-500 hover:text-gray-900">Considering(87)</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-400 transition ease-in duration-150 border-b-4 pb-3 hover:border-blue-500 hover:text-gray-900">In
                                Progress(87)</a>
                        </li>
                    </ul>

                    <ul class="flex space-x-3 uppercase text-gray-900 text-xs font-semibold pb-3 border-b-4 ">

                        <li>
                            <a href="#"
                                class="text-gray-400 transition ease-in duration-150   border-b-4 pb-3 hover:border-blue-500 hover:text-gray-900">Implemented(87)</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-400 transition ease-in duration-150 border-b-4 pb-3 hover:border-blue-500 hover:text-gray-900">Closed(87)</a>
                        </li>
                    </ul>
                </div>

                <div class="mt-8">

                    {{ $slot }}
                </div>

            </div>

        </main>
        {{--
    </div> --}}
</body>

</html>