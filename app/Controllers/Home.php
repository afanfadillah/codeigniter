<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function dashboard(): string
    {
        return view('home');
    }
    public function saya($umur, $nama)
    {
        echo "nama saya ".$nama. ", umur saya ".$umur;
    }
}
