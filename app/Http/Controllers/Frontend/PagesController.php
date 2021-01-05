<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function AboutUs()
    {
        // Inertia::setRootView('admin-panel');
        return Inertia::render("FrontendICO/AboutUs/AboutUs", []);
    }

    public function ContactUs()
    {
        return Inertia::render("FrontendICO/ContactUs/ContactUs");
    }

    public function FAQ()
    {
        return Inertia::render("FrontendICO/FAQ/FAQ");
    }

    public function Fees()
    {
        return Inertia::render("FrontendICO/Fees/Fees");
    }

    public function PrivacyPolicy()
    {
        return Inertia::render("FrontendICO/PrivacyPolicy/PrivacyPolicy");
    }

    public function TermsConditions()
    {
        return Inertia::render("FrontendICO/TermsConditions/TermsConditions");
    }

    public function Disclaimer()
    {
        return Inertia::render("FrontendICO/Disclaimer/Disclaimer");
    }

    public function Career()
    {
        return Inertia::render("FrontendICO/Career/Career");
    }

    public function Login()
    {
        Inertia::setRootView('layouts.cryptic-signup');
        return Inertia::render("FrontendCryptic/Login/Login");
    }

    public function Register()
    {
        Inertia::setRootView('layouts.cryptic-signup');
        return Inertia::render("FrontendCryptic/Register/Register");
    }
}
