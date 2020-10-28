<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public Post $post;

    public function mount()
    {
        $this->post = Post::make(['date' => now(), 'status' => 'draft']);
    }

    public function rules()
    {
        return [
            'post.title' => 'required',
            'post.status' => '',
            'post.date' => '',
        ];
    }

    public function save()
    {
        $this->validate();
        $this->post->save();
        $this->emit('closeModal');
        $this->emit('refreshTable');
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
