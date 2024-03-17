<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        return view('index');
    }

    public function meeting() {

        //if($this->request->getMethod() == 'post') {}

        //for insert
        //$model_object = new modelName;
        //$entity_object = new entityName;
        //$entity_object->name = $name;
        //$modelObject->save($entity_object);
        return view('meetings');
    }
}
