<?php


namespace App\Http\Livewire\DatatableTraits;


trait WithSearchBoxTrait
{
    public array $searchFields = []; // can pass relations like ['author.name', 'tags.name']
    public string $searchTerm = '';

    public function applyFilter($query)
    {
        return $query->whereLike($this->searchFields, $this->searchTerm);
    }

}
