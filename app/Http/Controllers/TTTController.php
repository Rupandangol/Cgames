<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TTTController extends Controller
{
    private $_path = 'TTT.pages.';

    public function index()
    {
        return view($this->_path . 'index');
    }

}
