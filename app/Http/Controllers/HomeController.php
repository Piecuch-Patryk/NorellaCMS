<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;
use App\Review;
use App\Helpers\Resolution;

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
        $resolution = Resolution::current();
        $products = Product::orderBy('updated_at', 'DESC')->take(5)->get();
        $slides = Slide::orderBy('updated_at', 'DESC')->where('resolution', '=', $resolution)->get();
        $reviews = Review::orderBy('updated_at', 'DESC')->take(5)->get();

        return view('home.index', [
            'products' => $products,
            'slides' => $slides,
            'reviews' => $reviews,
        ]);
    }
}
