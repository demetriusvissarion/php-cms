<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        // 1. Receive the request
        // 2. Delegate
        // 3. Return a response   
        
        return view('index');
    }

    public function about()
    {
        $company = 'PHP Ltd.';

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function admin()
    {
        return view('s');
    }
}