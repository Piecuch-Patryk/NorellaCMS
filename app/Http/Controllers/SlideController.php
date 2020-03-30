<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use App\Http\Requests\SlideRequest;
use Illuminate\Support\Facades\Storage;
use Image as Intervention;
use App\Helpers\Resolution;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::orderBy('updated_at', 'DESC')->get();
        return view('slide.index', ['slides' => $slides]);
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
     * @param  \Illuminate\Http\SlideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlideRequest $request)
    {
        if($request->hasFile('image'))
        {
            request()->validate([
                'image' => 'image|mimes:jpeg,png,jpg',
            ]);
            $name = uniqid() . '.png';
            $resolutions = Resolution::get();

            foreach(Resolution::get() as $resolution){
                $Slider = new Slide();
                $resolutionKey = array_search($resolution, $resolutions);
                $fullName = $resolutionKey . '_' . $name;
                $img  = Intervention::make($request->file('image'))
                ->widen($resolution, function($constraint){
                    $constraint->upsize();
                })
                ->encode('png');
                Storage::disk('public')->put('slides/' . $fullName, $img);

                $Slider->name = $fullName;
                $Slider->resolution = $resolutionKey;
                $Slider->save();
            }

            return redirect()->route('slide.index')->with('success', 'Zdjęcie zostało dodane.');
        }else {
            return redirect()->back()->with('error', 'Wystąpił problem, spróbuj ponownie.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        //
    }
}
