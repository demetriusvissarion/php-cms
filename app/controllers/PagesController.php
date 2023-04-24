<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {       
        return view('home');
    }

    public function page1()
    {
        $data = App::get('database')->selectAll('admin');
        return view('page1', $data);
    }

    public function page2()
    {
        $data = App::get('database')->selectAll('admin');
        return view('page2', $data);
    }

    public function page3()
    {
        $data = App::get('database')->selectAll('admin');
        return view('page3', $data);
    }

}