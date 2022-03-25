@extends('layouts.app')

@section('content')
<div class="flex w-full min-h-screen justify-center items-center">
    <div class="flex flex-col md:flex-row md:space-x-6 sm:p-12 md:space-y-0 
                space-y-6 bg-purple-700 w-full max-w-4xl p-8 rounded-xl md:shadow-lg 
                text-white overflow-hidden">
        <div class="flex flex-col space-y-8 justify-between md:w-1/2">
            <div>
                <h1 class="font-bold text-4xl tracking-wide">Tu dirección</h1>
                <p class="p-2 text-purple-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Facilis reiciendis inventore, perspiciatis cumque rem rerum ipsam quasi iste esse blanditiis 
                    velit porro labore ratione quo soluta laboriosam enim distinctio ullam.
                </p>
            </div>
        </div>
        <div class="relative">
            <div class="absolute w-40 h-40 bg-purple-400 rounded-full z-0 -right-28 -top-28"></div>
            <div class="absolute w-40 h-40 bg-purple-400 rounded-full z-0 -left-20 -bottom-20"></div>
            <div class="relative z-1 bg-white rounded-xl shadow-lg p-8 text-gray-600 md:w-full">
                @livewire('select2-example')
            </div>
        </div>
    </div>
</div>
@endsection