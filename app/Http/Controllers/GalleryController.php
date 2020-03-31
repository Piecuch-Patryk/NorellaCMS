<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use App\Helpers\Resolution;
use App\Http\Requests\GalleryRequest;
use Image as Intervention;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resolution = Resolution::current();
        $images = Gallery::orderBy('updated_at', 'DESC')->where('resolution', $resolution)->get();
        return view('gallery.index', ['images' => $images]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\GalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        if($request->hasFile('image'))
        {
            request()->validate([
                'image' => 'image|mimes:jpeg,png,jpg',
            ]);
            $name = uniqid() . '.png';
            $resolutions = Resolution::get();

            foreach(Resolution::get() as $resolution){
                $Image = new Gallery();
                $resolutionKey = array_search($resolution, $resolutions);
                $fullName = $resolutionKey . '_' . $name;
                $img  = Intervention::make($request->file('image'))
                ->widen($resolution, function($constraint){
                    $constraint->upsize();
                })
                ->encode('png');
                Storage::disk('public')->put('gallery/' . $fullName, $img);

                $Image->name = $fullName;
                $Image->resolution = $resolutionKey;
                $Image->save();
            }

            return redirect()->route('gallery.index')->with('success', 'Zdjęcie zostało dodane.');
        }else {
            return redirect()->back()->with('error', 'Wystąpił problem, spróbuj ponownie.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $image)
    {
        if(Storage::disk('public')->exists('gallery/'.$image->name)){
            $resolutions = Resolution::get();
            foreach($resolutions as $resolution){
                $name = explode('_', $image->name);
                $name = $name[1];
                $resolutionKey = array_search($resolution, $resolutions);
                $fullName = $resolutionKey . '_' . $name;
                
                Storage::disk('public')->delete('gallery/' . $fullName);
                Gallery::where('name', '=', $fullName)->delete();
            }
            return redirect()->back()->with('success', 'Wybrane zdjęcie zostało usunięte.');
        }else {
            return redirect()->back()->with('error', 'Wystąpił błąd, spróbuj ponownie.');
        }
    }
}
