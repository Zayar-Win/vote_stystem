<x-app-layout>
    <a href="/">
        <h1 class="font-md flex items-center space-x-3 font-gray-900 font-bold text-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

            All Ideas
        </h1>
    </a>
    <div class="idea-container flex bg-white rounded-lg mt-3 shadow-md">

        <div class="flex flex-1 px-2 py-6">
            <div class="flex-none mr-3">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-12 h-12 rounded-lg">
                </a>
            </div>
            <div class="w-full">
                <h1 class="font-bold text-lg hover:underline cursor-pointer">{{ $idea->title }}</h1>
                <p class="pt-3 font-xs font-semibold">{{ $idea->description }}</p>

                <div class='flex mt-8 items-center justify-between'>
                    <div class='flex items-center space-x-1 text-gray-500 font-bold text-xs'>
                        <p class="text-gray-900">{{ $idea->user->name }}</p>
                        <p>&bull;</p>
                        <p>{{ $idea->created_at->diffForHumans() }}</p>
                        <p>&bull;</p>
                        <p>Category 1</p>
                        <p>&bull;</p>
                        <p class="text-gray-900">3 Comments</p>
                    </div>

                    <div class="flex items-center space-x-1">
                        <div
                            class="bg-gray-200 w-28 h-7 py-2 px-4 rounded-xl text-xs text-center uppercase font-bold leading-none cursor-pointer">
                            open
                        </div>
                        <button class="bg-gray-100 relative rounded-xl  px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            {{-- <ul
                                class="absolute py-3 ml-6 font-semibold rounded-lg w-44 bg-white text-left shadow-sm">
                                <li class=""><a href="#" class="block py-3 px-5">Mark as Span</a></li>
                                <li class=""><a href="#" class="block py-3 px-5">Delete Post</a></li>
                            </ul> --}}
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between mt-4">
        <div x-data="{isOpen : false}" class="flex relative items-center space-x-2">
            <button type="button" @click="isOpen = !isOpen"
                class="flex items-center py-3 bg-own-blue text-white px-10 rounded-md justify-center font-bold">
                Reply
            </button>
            <div x-cloak x-show="isOpen" @click.away="isOpen = false"
                class="absolute left-0 top-full mt-5 z-10 w-104 bg-white px-4 py-6 rounded-md shadow-sm">
                <textarea name="comment" id="comment" cols="30" placeholder="Enter your comment"
                    class="w-full rounded-md placeholder:font-bold placeholder:text-gray-700" rows="4"></textarea>
                <div class="flex items-center space-x-3">
                    <button
                        class="flex items-center py-3 bg-own-blue text-white px-10 rounded-md justify-center font-bold">
                        Post Comment
                    </button>
                    <button class="flex items-center py-3 px-6 rounded-md justify-center font-bold bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" .
                                d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                        </svg>
                        Attach
                    </button>
                </div>
            </div>
            <div class="relative" x-data="{isOpen : false}">
                <button type="button" @click="isOpen = !isOpen"
                    class="flex items-center py-3 px-6  rounded-md justify-center font-bold bg-gray-300">
                    Set Status
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>

                </button>
                <div x-show="isOpen" x-cloak @click.away="isOpen = flase"
                    class="absolute left-0 bg-white top-full w-76 rounded-md py-6 px-3 shadow-md z-20">
                    <form action="#">
                        <div class="space-y-2">
                            <div>
                                <label for="open" class="flex items-center">
                                    <input type="radio" name="status" id="open" value="1" />
                                    <span class="ml-2 text-gray-700 font-bold">Open</span>
                                </label>
                            </div>
                            <div>
                                <label for="considering" class="flex items-center">
                                    <input type="radio" name="status" id="considering" value="2" />
                                    <span class="ml-2 text-gray-700 font-bold">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label for="inprogress" class="flex items-center">
                                    <input type="radio" name="status" id="inprogress" value="3" />
                                    <span class="ml-2 text-gray-700 font-bold">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label for="implemented" class="flex items-center">
                                    <input type="radio" name="status" id="implemented" value="4" />
                                    <span class="ml-2 text-gray-700 font-bold">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label for="closed" class="flex items-center">
                                    <input type="radio" name="status" id="closed" value="5" />
                                    <span class="ml-2 text-gray-700 font-bold">Closed</span>
                                </label>
                            </div>
                            <div>
                                <textarea name="updatedComment" id="updatedComment"
                                    class="w-full rounded-md text-sm placeholder:text-gray-700 placeholder:font-bold"
                                    placeholder="Add an update Comment(Optional)" cols="30" rows="3"></textarea>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button
                                    class="flex items-center py-3 bg-own-blue text-white px-10 rounded-md justify-center font-bold">
                                    Update
                                </button>
                                <button
                                    class="flex items-center py-3 px-6 rounded-md justify-center font-bold bg-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" .
                                            d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                    </svg>
                                    Attach
                                </button>
                            </div>
                            <div class="mt-2">
                                <label for="notify" class="flex items-center">
                                    <input type="checkbox" name="notify" id="notify" />
                                    <span class="text-gray-700 font-bold ml-3">Notify all voter</span>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <div class="bg-white rounded-md text-center px-3 py-1">
                <p class="font-extrabold text-lg">12</p>
                <p class="text-gray-400 font-extrabold">Votes</p>
            </div>
            <button class="flex items-center py-3 bg-gray-300  px-10 rounded-md justify-center font-bold">
                Vote
            </button>

        </div>

    </div>
    <div class="comments-container relative pt-6 mt-2 ml-10 flex flex-col space-y-6">
        <div class="comment relative mt-3 bg-white px-5 ml-12 py-6 rounded-md flex space-x-2">
            <div class="flex flex-none mr-2">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-12 h-12 rounded-lg">
                </a>
            </div>
            <div>
                <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nobis ipsa ad
                    exercitationem officia?
                    Ducimus totam culpa optio quisquam rerum?</p>
                <div x-data="{isOpen : false}" class="flex items-center justify-between mt-8">
                    <div class='flex items-center space-x-1 text-gray-500 font-bold text-xs'>
                        <p class="text-gray-900">Jhon Doe</p>
                        <p>&bull;</p>
                        <p>10 hours age</p>
                    </div>
                    <button type="button" @click="isOpen = !isOpen" class="bg-gray-100 relative rounded-xl  px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <ul x-cloak x-show="isOpen" @click.away="isOpen = false"
                            class="absolute py-3 ml-6 font-semibold rounded-lg w-44 bg-white text-left shadow-sm">
                            <li class=""><a href="#" class="block py-3 px-5">Mark as Span</a></li>
                            <li class=""><a href="#" class="block py-3 px-5">Delete Post</a></li>
                        </ul>
                    </button>
                </div>
            </div>
        </div>
        <div class="comment relative mt-3 bg-white px-5 ml-12 py-6 rounded-md flex space-x-2">
            <div class="flex flex-none mr-2">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-12 h-12 rounded-lg">
                </a>
            </div>
            <div>
                <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nobis ipsa ad
                    exercitationem officia?
                    Ducimus totam culpa optio quisquam rerum?</p>
                <div x-data="{isOpen : false}" class="flex items-center justify-between mt-8">
                    <div class='flex items-center space-x-1 text-gray-500 font-bold text-xs'>
                        <p class="text-gray-900">Jhon Doe</p>
                        <p>&bull;</p>
                        <p>10 hours age</p>
                    </div>
                    <button type="button" @click="isOpen = !isOpen" class="bg-gray-100 relative rounded-xl  px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <ul x-cloak x-show="isOpen" @click.away="isOpen = false"
                            class="absolute py-3 ml-6 font-semibold rounded-lg w-44 bg-white text-left shadow-sm">
                            <li class=""><a href="#" class="block py-3 px-5">Mark as Span</a></li>
                            <li class=""><a href="#" class="block py-3 px-5">Delete Post</a></li>
                        </ul>
                    </button>
                </div>
            </div>
        </div>
        <div class="comment relative admin mt-3 bg-white px-5 ml-12 py-6 rounded-md flex space-x-2">
            <div class="text-center flex-none mr-2">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-12 h-12 rounded-lg">
                </a>
                <span class="text-own-blue mt-1 inline-block font-semibold">Admin</span>
            </div>
            <div>
                <h1 class="font-bold text-xl">Status changed to Under Construction</h1>
                <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nobis ipsa ad
                    exercitationem officia?
                    Ducimus totam culpa optio quisquam rerum?</p>
                <div x-data="{isOpen : false}" class="flex items-center justify-between mt-8">
                    <div class='flex items-center space-x-1 text-gray-500 font-bold text-xs'>
                        <p class="text-gray-900">Jhon Doe</p>
                        <p>&bull;</p>
                        <p>10 hours age</p>
                    </div>
                    <button @click="isOpen = !isOpen" type="button" class="bg-gray-100 relative rounded-xl  px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                        <ul x-cloak x-show="isOpen" @click.away="isOpen = false"
                            class="absolute py-3 ml-6 font-semibold rounded-lg w-44 bg-white text-left shadow-sm">
                            <li class=""><a href="#" class="block py-3 px-5">Mark as Span</a></li>
                            <li class=""><a href="#" class="block py-3 px-5">Delete Post</a></li>
                        </ul>
                    </button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>