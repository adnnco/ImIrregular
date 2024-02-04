<?php

namespace App\Livewire;

use App\Models\IrregularVerb;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use withPagination;

    public $search = '';

    public function render()
    {



        return view('livewire.search', [
            'verbs' => IrregularVerb::search($this->search)->paginate(10),
        ]);
    }
}
