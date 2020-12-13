<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.privacy-policy')->layout("layouts.frontend.index");
    }
}
