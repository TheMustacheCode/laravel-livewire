@extends('layouts.app')

@section('content')
<div class="flex w-full min-h-screen justify-center items-center">
    <div class="flex flex-col md:flex-row md:space-x-6 sm:p-12 md:space-y-0 
                space-y-6 bg-purple-700 w-full max-w-4xl p-8 rounded-xl md:shadow-lg 
                text-white overflow-hidden">
        <div class="flex flex-col space-y-8 justify-between md:w-1/2">
            <div>
                <h1 class="font-bold text-4xl tracking-wide">Contact Us</h1>
                <p class="p-2 text-purple-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Facilis reiciendis inventore, perspiciatis cumque rem rerum ipsam quasi iste esse blanditiis 
                    velit porro labore ratione quo soluta laboriosam enim distinctio ullam.
                </p>
            </div>
            <div class="flex flex-col space-y-6">
                <div class="inline-flex space-x-2 items-center">
                    <ion-icon name="call" class="text-purple-300 text-xl"></ion-icon>
                    <span>+(123) 456 7890</span>
                </div>
                <div class="inline-flex space-x-2 items-center">
                    <ion-icon name="mail" class="text-purple-300 text-xl"></ion-icon>
                    <span>contact@mail.com</span>
                </div>
                <div class="inline-flex space-x-2 items-center">
                    <ion-icon name="location" class="text-purple-300 text-xl"></ion-icon>
                    <span>11, Street 342, Hello world! </span>
                </div>
            </div>
            <div class="flex space-x-4 text-lg">
                <a href="#">
                    <ion-icon name="logo-facebook" class="text-white text-xl"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-twitter" class="text-white text-xl"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-linkedin" class="text-white text-xl"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-instagram" class="text-white text-xl"></ion-icon>
                </a>
            </div>
        </div>
        <div class="relative">
            <div class="absolute w-40 h-40 bg-purple-400 rounded-full z-0 -right-28 -top-28"></div>
            <div class="absolute w-40 h-40 bg-purple-400 rounded-full z-0 -left-20 -bottom-20"></div>
            <div class="relative z-1 bg-white rounded-xl shadow-lg p-8 text-gray-600 md:w-full">
                <form action="/contact" method="POST" class="flex flex-col space-y-4">
                    @csrf

                    @if ($message = Session::get('success_message'))
                    <div class="rounded-md bg-green-50 p-4 mt-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm leading-5 font-medium text-green-800">
                                    {{ $message }} 
                                </p>
                            </div>
                            <div class="ml-auto pl-3">
                                {{-- <div class="-mx-1.5 -my-1.5">
                                    <button
                                        type="button"
                                        wire:click="$set('successMessage', null)"
                                        class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                                        aria-label="Dismiss">
                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @endif

                    <div>
                        <label for="" class="text-sm">Your Name</label>
                        <input 
                            type="text" 
                            name="name"
                            placeholder="Name" 
                            class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                            focus:ring-2 focus:ring-purple-300 @error('email')border border-red-500 @enderror"
                            value="{{ old('name') }}"
                        />
                        @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="" class="text-sm">Email Address</label>
                        <input 
                            type="text"
                            name="email" 
                            placeholder="Email" 
                            class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                            focus:ring-2 focus:ring-purple-300 @error('email')border border-red-500 @enderror"
                            value="{{ old('email') }}"
                        />
                        @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="" class="text-sm">Message</label>
                        <textarea 
                            type="email" 
                            name="contactMessage"
                            placeholder="Message" 
                            rows="4"
                            class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                            focus:ring-2 focus:ring-purple-300 @error('email')border border-red-500 @enderror"
                            
                        >{{ old('contactMessage') }}</textarea>
                        @error('contactMessage')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="inline-block self-end bg-purple-700 font-bold rounded-lg px-6 py-2 text-white">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection