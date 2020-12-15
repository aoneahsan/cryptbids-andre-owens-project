<?php

namespace App\Http\Livewire\Frontend\Home;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.frontend.home.home-page')->with("success","ok")->layout("layouts.frontend.index");
    }
}
