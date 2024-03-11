<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        return view('index');
    }

    public function meeting() {

        //if($this->request->getMethod() == 'post') {}
        return view('meetings');
    }
}
