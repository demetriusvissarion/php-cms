<?php

namespace App\Controllers;

use App\Core\App;

class ContentController
{
    public function store()
    {
        $database = App::get('database');

        // Update page 1 content
        $data = [
            'id' => 1,
            'content' => $_POST['page1_content']
        ];
        $database->update('pages', $data, 'id');

        // Update page 2 content
        $data = [
            'id' => 2,
            'content' => $_POST['page2_content']
        ];
        $database->update('pages', $data, 'id');

        // Update page 3 content
        $data = [
            'id' => 3,
            'content' => $_POST['page3_content']
        ];
        $database->update('pages', $data, 'id');

        // Redirect back to the admin page
        return redirect('admin');
    }
}
