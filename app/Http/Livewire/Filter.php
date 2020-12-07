<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class Filter extends Component {
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    public $searchTerm;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render() {
        return view('livewire.filter', [
            'news' => News::where(function ($query) {
                $query->where('department', 'LIKE', '%' . $this->searchTerm . '%')
                    ->orWhere('user', 'LIKE', '%' . $this->searchTerm . '%');
            })->orderBy('created_at', 'DESC')->paginate(5)
        ]);
    }
}
