<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class TermsAndConditions extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.terms-and-conditions')->layout("layouts.frontend.index");
    }
}
