<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('updated_at', 'DESC')->take(5)->get();
        $slides = Slide::orderBy('updated_at', 'DESC')->get();

        return view('home.index', [
            'products' => $products,
            'slides' => $slides,
        ]);
    }
}
