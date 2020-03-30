<?php

use Illuminate\Database\Seeder;
use App\Slide;
use App\Helpers\Resolution;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resolutions = Resolution::get();
        foreach($resolutions as $resolution){
            $resolutionKey = array_search($resolution, $resolutions);
            $slide = new Slide();
            $slide->name = $resolutionKey . '_66147_314047108758495_4297658955865886670_n.jpg';
            $slide->resolution = $resolutionKey;
            $slide->save();
        }
    }
}
