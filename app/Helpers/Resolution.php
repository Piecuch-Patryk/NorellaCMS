<?php
namespace App\Helpers;

use Jenssegers\Agent\Agent;

class Resolution {
    public static function index()
    {
        $agent = new Agent();
        if($agent->isPhone()) return 'sm';
        if($agent->isTablet()) return 'md';
        if($agent->isDesktop()) return 'lg';
    }

    public static function get()
    {
        return [
            'sm'=>400,
            'md'=>800,
            'lg'=>1280,
        ];
    }
    public static function imgProduct()
    {
        return '500';
    }
}