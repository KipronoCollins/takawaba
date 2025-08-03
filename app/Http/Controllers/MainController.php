<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function ceoMessage()
    {
        return view('pages.ceoMessage');
    }

    public function policy()
    {
        return view('pages.policy');
    }
    
    public function board()
    {
        return view('pages.board');
    }

    public function management()
    {
        return view('pages.managementTeam');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function lab()
    {
        return view('pages.lab');
    }

    public function sources()
    {
        return view('pages.sources');
    }

    public function serviceArea()
    {
        return view('pages.serviceArea');
    }

    public function sewer()
    {
        return view('pages.sewer');
    }

    public function waterServices()
    {
        return view('pages.waterServices');
    }

    public function photoGallery()
    {
        return view('pages.photoGallery');
    }
}
