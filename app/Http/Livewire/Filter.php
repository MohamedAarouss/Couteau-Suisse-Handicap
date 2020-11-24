<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class Filter extends Component {
    use WithPagination;

    public $searchTerm;
    public $currentPage = 1;

    public function render() {
        return view('livewire.filter', [
            'news' => News::where(function ($query) {
                $query->where('department', 'LIKE', '%' . $this->searchTerm . '%')
                    ->orWhere('user', 'LIKE', '%' . $this->searchTerm . '%');
            })->paginate(6)
        ]);
    }

    /*public function setPage($url) {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }*/
}
