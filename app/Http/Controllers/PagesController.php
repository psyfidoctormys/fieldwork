<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the Sample QA Dashboard!';
        return view('pages.index', compact('title'));
    }
    public function about(){
        $title = 'About Us';        
        return view('pages.about')->with('title',$title);
    }
    //passing multiple datapoints
    public function service(){
        $data = array(
            'title' => 'Services We Provide',
            'services' => ['Web Design', 'Programming','SEO']
        );
        return view('pages.service')->with($data);
    }
    public function lvtableview(){
        return view('pages.lvtableview');
    }
}
