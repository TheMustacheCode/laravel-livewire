@extends('layouts.app')

@section('content')
        {{-- Success is as dangerous as failure. --}}
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
                        <form class="flex flex-col space-y-4">
                            @csrf
                            <div>
                                <label for="" class="text-sm">País</label>
                                <select 
                                    id="country_id"
                                    class="appearance-none ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                                    focus:ring-2 focus:ring-purple-300 @error('name')border border-red-500 @enderror"
                                >
                                    <option value="" disabled selected>Seleccione un país</option>
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="" class="text-sm">Estado</label>
                                <select 
                                    id="state_id"
                                    class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                                    focus:ring-2 focus:ring-purple-300 @error('name')border border-red-500 @enderror"
                                >
                                </select>
                                @error('state')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="" class="text-sm">Ciudad</label>
                                <select 
                                    id="city_id"
                                    class="ring-1 ring-gray-300 w-full rounded-md px-4 py-2 mt-2 outline-none
                                    focus:ring-2 focus:ring-purple-300 @error('name')border border-red-500 @enderror"
                                >
                                </select>
                                @error('city')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <button class="inline-flex self-end bg-purple-700 font-bold rounded-lg px-6 py-2 text-white disabled:opacity-50">
                                <svg wire:target="submitForm" wire:loading class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Guardar Dirección
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#country_id').change(function () {
                var $state = $('#state_id');
                $.ajax({
                    url: "{{ route('states.index') }}",
                    data: {
                        country_id: $(this).val()
                    },
                    success: function (data) {
                        $state.html('<option value="" selected>Selecciona un estado</option>');
                        $.each(data, function (id, value) {
                            $state.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
                $('#state_id, #city_id').val("");
                $('#state').removeClass('d-none');
            });
            $('#state_id').change(function () {
                var $city = $('#city_id');
                $.ajax({
                    url: "{{ route('cities.index') }}",
                    data: {
                        state_id: $(this).val()
                    },
                    success: function (data) {
                        $city.html('<option value="" selected>Selecciona una ciudad</option>');
                        $.each(data, function (id, value) {
                            $city.append('<option value="' + id + '">' + value + '</option>');
                        });
                    }
                });
                $('#city').removeClass('d-none');
            });
        });
    </script>
@endsection

