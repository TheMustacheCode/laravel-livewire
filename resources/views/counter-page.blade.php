@extends('layouts.app')

@section('content')
<div class="flex w-full min-h-screen justify-center items-center">
    <div class="flex flex-col md:flex-row md:space-x-6 sm:p-12 md:space-y-0 
                space-y-6 bg-purple-700 w-full max-w-4xl p-8 rounded-xl md:shadow-lg 
                text-white overflow-hidden">
        <div class="mx-auto">
            <livewire:counter />
        </div>
    </div>
</div>
@endsection