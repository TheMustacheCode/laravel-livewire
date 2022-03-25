<div>
    <div>
        <form class="flex flex-col space-y-4">
            @csrf
            <div wire:ignore>
                <label for="" class="text-sm">País Select 2</label>
                <select 
                    wire:model="selectedCountry"
                    id="select2-country">
                    <option value="" selected>Seleccione un país</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
    
            @if($selectedCountry)
            <div>
                <label for="" class="text-sm">Estado</label>
                <select 
                    wire:model="selectedState"
                    id="state_id"
                    class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                    focus:ring-2 focus:ring-purple-300 @error('state')border border-red-500 @enderror">
                    <option value="" selected>Debe seleccionar un estado</option>
                    @foreach($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
                @error('state')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            @endif
            @if($selectedState)
            <div>
                <label for="" class="text-sm">Ciudad</label>
                <select 
                    wire:model="selectedCity"
                    id="city_id"
                    class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                    focus:ring-2 focus:ring-purple-300 @error('city')border border-red-500 @enderror">
                    <option value="" selected>Debe seleccionar una ciudad</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                @error('city')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            @endif
            <button class="inline-flex self-end bg-purple-700 font-bold rounded-lg px-6 py-2 text-white disabled:opacity-50">
                Guardar Dirección
            </button>
        </form>
    </div>
    
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        $("#select2-country").select2();
    
        $('#select2-country').on('change', function(e) {
            var countryId = $('#select2-country').select2("val");
            @this.set('selectedCountry', countryId);
        });
    });
    </script>
</div>
