<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class SearchDropdown extends Component
{

    public $search;
    public $searchResults = [];


    public function updatedSearch($newValue)
    {
        if(strlen($this->search) > 3) {
            $response = Http::get('https://itunes.apple.com/search?term='.$this->search.'&limit=5');
            $this->searchResults = $response->json()['results'];
        }
    }

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
