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
        $slide->name = '66147_314047108758495_4297658955865886670_n.jpg';
        $slide->save();

        
        $slide = new Slide();
        $slide->name = '10506800_314045672091972_8250207559448199585_o.jpg';
        $slide->save();
    }
}
