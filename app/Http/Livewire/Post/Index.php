<?php

namespace App\Http\Livewire\Post;

use App\Http\Livewire\DatatableTraits\WithPerPagePagination;
use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    use WithPerPagePagination;

    public function render()
    {
        return view('livewire.post.index', ['posts' => $this->applyPagination(Post::query())]);
    }
}
