<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $data = [];
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $this->data['sub_users'] =[];
        return view('home', $this->data);
    }
}
