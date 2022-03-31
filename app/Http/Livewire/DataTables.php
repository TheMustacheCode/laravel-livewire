<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTables extends Component
{

    use WithPagination;

    public $active = true;
    public $search;
    public $sortField;
    public $sortAsc = true;

    protected $queryString = ['search', 'active', 'sortField', 'sortAsc'];


    public function sortBy($field)
    {
        if($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.data-tables', [
            'users' => User::where( function($search) {
                $search->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->when($this->sortField, function($query){
                $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->where('active', $this->active)
            ->paginate(5)
        ]);
    }

    // public function paginationView()
    // {
    //     return 'Livewire.custom-pagination-links-view';
    // }
 
}
