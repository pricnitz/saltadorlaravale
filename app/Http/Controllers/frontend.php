<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontend extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // Services methods
    public function architect()
    {
        return view('pages.services.architect');
    }

    public function interior()
    {
        return view('pages.services.interior');
    }

    public function landscape()
    {
        return view('pages.services.landscape');
    }

    public function urban()
    {
        return view('pages.services.urban');
    }

    public function projectManagement()
    {
        return view('pages.services.management');
    }

    public function mep()
    {
        return view('pages.services.mep');
    }
}
