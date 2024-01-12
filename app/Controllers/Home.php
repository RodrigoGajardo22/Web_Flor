<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    

    public function servicios()
    {

        return view("servicios");
    }

    public function proyectos()
    {

        return view("proyectos");
    }

    public function contacto()
    {

        return view("contacto");
    }

}
