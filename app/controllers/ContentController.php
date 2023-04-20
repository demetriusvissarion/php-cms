<?php

namespace App\Controllers;

use App\Core\App;

class ContentController
{
    public function index()
    {
        $admin = App::get('database')->selectAll('admin');
        return view('admin', compact('admin'));
    }

    public function store($name, $id)
    {
        App::get('database')->update('admin', [
        'name' => $name,
        'id' => $id
        ]);
        
        return redirect('admin');
    }

}