<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Country;
use App\Models\State;
use App\Models\City;


class CountryStateCity extends Component
{
    public $countries;
    public $states;
    public $cities;

    public $selectedCountry = '';
    public $selectedState = NULL;
    public $selectedCity = NULL;


    public function mount()
    {
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
    }


    public function render()
    {
        return view('livewire.country-state-city');
    }

    public function updatedSelectedCountry($country)
    {
        sleep(2);
        $this->states = State::where('country_id', $country)->get();
        $this->selectedState = NULL;
    }

    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }
}

