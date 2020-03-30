<?php

use Illuminate\Database\Seeder;
use App\Slide;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slide = new Slide();
        $slide->name = 'lg_66147_314047108758495_4297658955865886670_n.jpg';
        $slide->resolution = 'lg';
        $slide->save();
    }
}
