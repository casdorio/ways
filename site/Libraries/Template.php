<?php

namespace App\Libraries;

class Template {

    public function render($view, $data = []) {
        echo view('common/header', $data);
        echo view('common/navbar', $data);
        echo view('common/sidebar', $data);
        echo view($view, $data);
        echo view('common/footer', $data);
    }

}
