<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $fullname = "Triphet Pondee";
        $website = "libapp.sru.ac.th";
        return view('about',[
            'fullname' => $fullname,
            'website' => $website
        ]);
    }
}
