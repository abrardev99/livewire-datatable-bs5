<?php

namespace App\Http\Livewire\Post;

use App\Http\Livewire\DatatableTraits\WithPerPagePagination;
use App\Http\Livewire\DatatableTraits\WithSearchBoxTrait;
use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    use WithPerPagePagination, WithSearchBoxTrait;

    public function mount()
    {
        $this->searchFields = ['title', 'status'];
    }


    public function getRowsProperty()
    {
        $query = Post::query();
        $filtered =  $this->applyFilter($query);
        return $this->applyPagination($filtered);

    }


    public function render()
    {
        return view('livewire.post.index', ['posts' => $this->rows]);
    }
}
