<?php

use Illuminate\Database\Seeder;
use App\Gallery;
use App\Helpers\Resolution;


class GalleryTableSeeder extends Seeder
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
            $slide = new Gallery();
            $slide->name = $resolutionKey . '_10506800_314045672091972_8250207559448199585_o.jpg';
            $slide->resolution = $resolutionKey;
            $slide->save();
        }
    }
}
