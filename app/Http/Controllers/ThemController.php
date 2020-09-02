<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemController extends Controller
{
    function index(){
        //return view( 'main', 'main');
        

        return  View('/404.html','404');
        return  View('/about');
        return  View('/blog-home-1');
        return  View('/blog-home-2');
        return  View('/blog-post');
        return  View('/contact');
        return  View('/faq');
        return  View('/portfolio-1-col');
        return  View('/portfolio-2-col');
        return  View('/portfolio-3-col');
        return  View('/portfolio-4-col');
        return  View('/portfolio-item');
        return  View('/pricing');
        return  View('/services');
    }
}
