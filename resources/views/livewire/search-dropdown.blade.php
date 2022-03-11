<div>
    <div class="relative">
        <h2 class="font-bold text-2xl text-center mb-4 tracking-wide">Buscar una canción</h2>
        <div class="relative text-gray-600">
            <input wire:model.debounce.300ms="search" type="search" name="serch" placeholder="Search" class="bg-white text-gray-600 h-10 px-5 pr-10 w-full rounded-full text-sm focus:outline-none relative">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <svg wire:loading.class="hidden" class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                  <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                </svg>
                <svg wire:loading class="animate-spin h-4 w-4 pt-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </button>
        </div>
        @if(strlen($search) > 3)
            <ul
            class="absolute z-50 bg-white border border-gray-300 w-full rounded-md mt-2 text-gray-700 text-sm divide-y divide-gray-200">
            @forelse ($searchResults as $result)
                <li>
                    <a target="_blank" href="{{ $result['trackViewUrl'] }}" class="flex items-center px-4 py-4 hover:bg-gray-200 transition ease-in-out duration-150">
                        <img src="{{ $result['artworkUrl100'] }}"
                            alt="album art" class="w-20">
                        <div class="ml-4 leading-tight">
                            <div class="font-semibold">
                                    {{ $result['trackName'] }}
                            </div>
                            <div class="text-gray-600">
                                    {{ $result['artistName'] }}
                            </div>
                        </div>
                    </a>
                </li>
            @empty
            <li class="px-4 py-4">No se obtuvieron resultados para {{ $search }} </li>
            @endforelse
            </ul>
        @endif
    </div>
</div>
