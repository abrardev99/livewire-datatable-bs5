<?php


namespace App\Http\Livewire\DatatableTraits;


use Livewire\WithPagination;

trait WithPerPagePagination
{
    use WithPagination;

    public $perPage = 10;
    protected $paginationTheme = 'bootstrap';

    public function paginationView()
    {
        return 'partial.pagination.bootstrap-5';
    }

    public function updatedPerPage($value)
    {
        $this->gotoPage(1);
    }

    public function applyPagination($query)
    {
        return $query->paginate($this->perPage);
    }
}
