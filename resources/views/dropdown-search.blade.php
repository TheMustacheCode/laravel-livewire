@extends('layouts.app')

@section('content')
<div class="flex w-full min-h-screen justify-center items-center">
    <div class=" relative md:flex-row md:space-x-6 sm:p-12 md:space-y-0 
                space-y-6 bg-purple-700 w-full max-w-4xl p-8 rounded-xl md:shadow-lg 
                text-white">
        <div class="relative">
            <h2 class="font-bold text-2xl text-center mb-4 tracking-wide">Buscar una canción</h2>
            <input type="search" name="serch" placeholder="Search" class="bg-white text-gray-600 h-10 px-5 pr-10 w-full rounded-full text-sm focus:outline-none">
            <ul
            class="absolute z-50 bg-white border border-gray-300 w-full rounded-md mt-2 text-gray-700 text-sm divide-y divide-gray-200">
                <li>
                    <a class="flex items-center px-4 py-4 hover:bg-gray-200 transition ease-in-out duration-150">
                        <img src="https://is2-ssl.mzstatic.com/image/thumb/Video3/v4/66/49/9f/66499fa5-86a9-cd39-9d92-acd25f463d69/source/60x60bb.jpg"
                            alt="album art" class="w-10">
                        <div class="ml-4 leading-tight">
                            <div class="font-semibold">
                                    Untitled
                            </div>
                            <div class="text-gray-600">
                                    No Artist
                            </div>
                        </div>
                    </a>
                </li>
                <li class="px-4 py-4">No results found for $search "</li>
            </ul>
        </div>
    </div>
</div>


@endsection