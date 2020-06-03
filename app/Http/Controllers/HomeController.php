<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Review;
// use App\Helpers\Resolution;

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
        // $resolution = Resolution::current();

        $collectionCategories = Category::where('featured', '=', 1)->get();
        $categories = $collectionCategories->toArray();
        $categoriesIDs = $collectionCategories->pluck('id')->toArray();

        $products = Product::whereIn('category_id', $categoriesIDs)->get();
        $reviews = Review::orderBy('updated_at', 'DESC')->take(5)->get();

        return view('home.index', [
            'categories' => $categories,
            'products' => $products,
            'reviews' => $reviews,
        ]);
    }
}
