<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HangmanController extends Controller
{
    private $_path = 'Hangman.pages.';

    public function index()
    {
        return view($this->_path . 'index');
    }
}
