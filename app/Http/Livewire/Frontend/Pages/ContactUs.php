<?php

namespace App\Http\Livewire\Frontend\Pages;

use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.contact-us')->layout("layouts.frontend.index");
    }
}
