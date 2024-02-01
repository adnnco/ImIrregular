<?php

namespace App\Livewire;

use App\Models\IrregularVerb;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {

        return view('livewire.search', [
            'verbs' => IrregularVerb::search($this->search)->get(),
        ]);
    }
}
