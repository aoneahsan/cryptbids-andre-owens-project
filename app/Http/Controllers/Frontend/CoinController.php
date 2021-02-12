<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CoinController extends Controller
{
    public function index()
    {
        Inertia::setRootView('layouts.cryptic-full-page');
        return Inertia::render("FrontendCryptic/Coins/List");
    }
}
