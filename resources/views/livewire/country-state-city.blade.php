<div>
    <div>
        <label for="" class="text-sm">País</label>
        <select 
            wire:model="selectedCountry"
            id="country_id"
            class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
            focus:ring-2 focus:ring-purple-300">
            <option value="" disabled selected>Seleccione un país</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>
    @if($selectedCountry)
    <div class="mt-2">
        <label for="" class="text-sm">Estado </label>
        <svg wire:target="selectedCountry" wire:loading class="animate-spin ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <select 
            wire:model="selectedState"
            id="state_id"
            class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
            focus:ring-2 focus:ring-purple-300">
            @if (!is_null($selectedCountry))
                @foreach($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            @else
            <option value="" disabled selected>Debe seleccionar un país</option>
            @endif
        </select>
    </div>
    @endif
    @if($selectedState)
    <div class="mt-2">
        <label for="" class="text-sm">Ciudad</label>
        <svg wire:target="selectedState" wire:loading class="animate-spin ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
        </svg>
        <select 
            wire:model="selectedCity"
            id="city_id"
            class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
            focus:ring-2 focus:ring-purple-300">
            @if (!is_null($selectedState))
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            @else
            <option value="" disabled selected>Debe seleccionar un estado</option>
            @endif
        </select>
    </div>
    @endif
</div>
