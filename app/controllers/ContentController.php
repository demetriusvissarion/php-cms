<?php

namespace App\Controllers;

use App\Core\App;

class ContentController
{
    public function change()
    {
        $data = [
            'id' => 1,
            'page1_text' => $_POST['page1_content']
        ];
        App::get('database')->update('page1_content', $data);

        $data = [
            'id' => 1,
            'page2_text' => $_POST['page2_content']
        ];
        App::get('database')->update('page2_content', $data);

        $data = [
            'id' => 1,
            'page3_text' => $_POST['page3_content']
        ];
        App::get('database')->update('page3_content', $data);
        
        return redirect('admin');
    }
}