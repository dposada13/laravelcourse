<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $data1 = 'About us - Online Store';
        $data2 = 'About us';
        $description = 'This is an about page sports equipment';
        $author = 'Developed by: Daniel Posada';

        return view('home.about')
            ->with('title', $data1)
            ->with('subtitle', $data2)
            ->with('description', $description)
            ->with('author', $author);
    }
}
