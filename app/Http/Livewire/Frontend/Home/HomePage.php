<?php

namespace App\Http\Livewire\Frontend\Home;

use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class HomePage extends Component
{
    public function render()
    {
        alert()->success('Success Title', 'Success Message');
        return view('livewire.frontend.home.home-page')->with("success","ok")->layout("layouts.frontend.index");
    }
}
