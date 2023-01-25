<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Search ideas"
                class='rounded-lg placeholder:text-gray-900 border-none w-full px-4 py-2 pl-8'>
            <div class="absolute top-0 h-full flex items-center ml-2">
                <svg class="w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="ideas-container flex flex-col space-y-6 my-6 ">
        @foreach ($ideas as $idea )
        <div x-data @click="const target = $event.target.tagName.toLowerCase()
                            const ingnores = ['button','svg','path','a','img'];
                            const ideaLink = $event.target.closest('.idea-container').querySelector('.idea-link');
                            !ingnores.includes(target) && ideaLink.click()
        
        
        " class=" idea-container cursor-pointer flex bg-white rounded-lg shadow-md">
            <div class='px-5 py-8 border-r border-gray-300'>
                <div class="text-center ">
                    <p class="text-xl font-bold">12</p>
                    <p class="text-base text-gray-700">Votes</p>
                </div>
                <button class="mt-5 uppercase font-bold w-20 px-4 py-3 border-gray-200 hover:border-gray-400
                    transition duration-150 ease-in border bg-gray-300 rounded-xl text-xs">vote</button>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none mr-3">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                            class="w-12 h-12 rounded-lg">
                    </a>
                </div>
                <div class="w-full">
                    <a class="idea-link" href="{{ route('idea.show',$idea) }}">
                        <h1 class="font-bold text-lg hover:underline cursor-pointer">{{ $idea->title }}</h1>
                    </a>
                    <p class="pt-3 font-xs font-semibold">{{ $idea->description }}</p>

                    <div class='flex mt-8 items-center justify-between'>
                        <div class='flex items-center space-x-3 text-gray-500 font-bold text-xs'>
                            <p>{{ $idea->created_at->diffForHumans() }}</p>
                            <p>&bull;</p>
                            <p>Category 1</p>
                            <p>&bull;</p>
                            <p class="text-gray-900">3 Comments</p>
                        </div>

                        <div class="flex items-center space-x-1" x-data="{isOpen : false}">
                            <div
                                class="bg-gray-200 w-28 h-7 py-2 px-4 rounded-xl text-xs text-center uppercase font-bold leading-none cursor-pointer">
                                open
                            </div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="bg-gray-100 relative rounded-xl  px-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                <ul x-cloak x-show="isOpen" @click.away="isOpen = false"
                                    class="absolute py-3 ml-6 font-semibold transition rounded-lg w-44 bg-white text-left shadow-sm">
                                    <li class=""><a href="/" class="block py-3 px-5 hover:bg-gray-200 ">Mark as Span
                                        </a>
                                    </li>
                                    <li class=""><a href="/" class="block py-3 px-5 hover:bg-gray-200">Delete Post</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="my-8">
        {{ $ideas->links() }}
    </div>


</x-app-layout>