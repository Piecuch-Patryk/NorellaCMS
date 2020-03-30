<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Image as Intervention;
use App\Helpers\Resolution;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('updated_at', 'DESC')->get();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

/* 

    Temp-function
    !!DRY!!

*/
    private function resizeImage($img)
    {
        $resolution = Resolution::imgProduct();
        $resizedImg = Intervention::make($img)
        ->widen($resolution, function($constraint){
            $constraint->upsize();
        })
        ->encode('png');

        return $resizedImg;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        if($request->hasFile('image')){
            request()->validate([
                'image' => 'image|mimes:jpeg,png,jpg',
            ]);
            $product = new Product();
            $name = uniqid() . '.png';
            $img  = $this->resizeImage($request->file('image'));
            Storage::disk('public')->put('products/' . $name, $img);
            $product->image = $name;
            $product->title = $request->title;
            $product->content = $request->content;
            $product->amount = $request->amount;
            $product->save();

            return redirect()->route('product.index')->with('success', 'Oferta została dodana.');
        }else {
            return redirect()->route('product.index')->with('error', 'Oferta musi posiadać obrazek.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
