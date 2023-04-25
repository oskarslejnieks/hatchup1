<?php

namespace App\Http\Controllers;

class PageController extends Controller {
    public function students() 
    {
        return view('categories/students');
    }

    public function clientService() 
    {
        
    }

    public function workOnSite()
    {
        return view('categories/workOnSite');
    }
    public function remoteWork()
    {
        return view('categories/remoteWork');
    }
    public function seniors()
    {
        return view('categories/seniors');
    }
    public function socialMedia()
    {
        return view('categories/desc/social-media');
    }
    public function register()
    {
        return view('other/register');
    }
    public function employers()
    {
        return view('other/employers');
    }
}