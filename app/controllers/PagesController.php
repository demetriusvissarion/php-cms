<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {       
        return view('home');
    }

    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

    public function page3()
    {
        return view('page3');
    }

    public function admin()
    {
        return view('admin');
    }
}