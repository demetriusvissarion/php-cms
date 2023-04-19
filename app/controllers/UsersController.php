<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    public function store()
    {
        // 1. Insert the user associated with the request.
        // 2. Redirect back to all users
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        
        return redirect('users');
    }

    public function change1()
    {
        App::get('database')->insert('blog_content', [
            'page1_content' => $_POST['page1_content']
        ]);
        
        return redirect('admin');
    }

    public function change2()
    {
        App::get('database')->insert('blog_content', [
            'page2_content' => $_POST['page2_content']
        ]);
        
        return redirect('admin');
    }

    public function change3()
    {
        App::get('database')->insert('blog_content', [
            'page3_content' => $_POST['page3_content']
        ]);
        
        return redirect('admin');
    }
}