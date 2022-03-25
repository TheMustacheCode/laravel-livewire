<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h1  class="font-bold text-4xl tracking-wide">Contador</h1>
    <div class="font-bold text-4xl text-center">
        <button wire:click="decrement">-</button>
        <span>{{ $counter }}</span>
        <button wire:click="increment">+</button>
    </div>
    
</div>
