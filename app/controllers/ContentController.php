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

    public function page1_store()
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
    
        if ($id == 1) {
            App::get('database')->update('admin', $id, $name);
        }
        return redirect('admin');
    }
    
    public function page2_store()
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
    
        if ($id == 2) {
            App::get('database')->update('admin', $id, $name);
        }
        return redirect('admin');
    }
    
    public function page3_store()
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
    
        if ($id == 3) {
            App::get('database')->update('admin', $id, $name);
        }
        return redirect('admin');
    }

}