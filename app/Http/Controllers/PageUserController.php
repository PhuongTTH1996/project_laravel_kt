<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PageUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $this->data['products'] = $products;
        return view('pageuser', $this->data);
    }

    public function dienthoai()
    {
        $products = Product::where('type_group','=','1')->get();
        $this->data['products'] = $products;
        return view('pageuser', $this->data);
    }

    public function computer()
    {
        $products = Product::where('type_group','=','2')->get();
        $this->data['products'] = $products;
        return view('pageuser', $this->data);
    }
}
