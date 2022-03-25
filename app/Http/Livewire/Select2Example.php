<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Country;
use App\Models\State;
use App\Models\City;

class Select2Example extends Component
{

    public $countries;
    public $states;
    public $cities;

    public $selectedCountry = NULL;
    public $selectedState = NULL;
    public $selectedCity = NULL;

    public function mount()
    {
        $this->countries = Country::all();
        $this->states = collect();
        $this->cities = collect();
    }

    public function updatedSelectedCountry($country)
    {
        $this->states = State::where('country_id', $country)->get();
        $this->selectedState = NULL;
    }

    public function updatedSelectedState($state)
    {
        $this->cities = City::where('state_id', $state)->get();
    }

    public function render()
    {
        return view('livewire.select2-example');
    }
}