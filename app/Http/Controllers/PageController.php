<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the team page.
     *
     * @return \Illuminate\View\View
     */
    public function team()
    {
        return view('team');
    }

    /**
     * Display the technology page.
     *
     * @return \Illuminate\View\View
     */
    public function technology()
    {
        return view('technology');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }
}
