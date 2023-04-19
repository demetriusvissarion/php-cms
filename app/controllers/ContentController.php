<?php

namespace App\Controllers;

use App\Core\App;

class ContentController
{
    public function change()
    {
        $database = App::get('database');

        // Update page 1 content
        $id = 1;
        $page_content = 'page1_content';
        $database->update('pages', $id, $page_content);

        // Update page 2 content
        $id = 2;
        $page_content = 'page2_content';
        $database->update('pages', $id, $page_content);

        // Update page 3 content
        $id = 3;
        $page_content = 'page3_content';
        $database->update('pages', $id, $page_content);

        // Redirect back to the admin page
        return redirect('admin');
    }
}
