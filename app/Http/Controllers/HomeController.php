<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function listingPage(){
        return view('listing_page');
    }
    public function dueExpensePage(){
        return view('due_expense_page');

    }
    public function dueDatePage(){
        return view('due_date_page');

    }
}
