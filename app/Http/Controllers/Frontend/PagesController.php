<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function AboutUs()
    {
        return Inertia::render("Frontend/AboutUs/AboutUs");
    }

    public function ContactUs()
    {
        return Inertia::render("Frontend/ContactUs/ContactUs");
    }

    public function FAQ()
    {
        return Inertia::render("Frontend/FAQ/FAQ");
    }

    public function Fees()
    {
        return Inertia::render("Frontend/Fees/Fees");
    }

    public function PrivacyPolicy()
    {
        return Inertia::render("Frontend/PrivacyPolicy/PrivacyPolicy");
    }

    public function TermsConditions()
    {
        return Inertia::render("Frontend/TermsConditions/TermsConditions");
    }

    public function Disclaimer()
    {
        return Inertia::render("Frontend/Disclaimer/Disclaimer");
    }

    public function Career()
    {
        return Inertia::render("Frontend/Career/Career");
    }
}
