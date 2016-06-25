<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
    
    /**
     * Show Details About Us
     *
     * @return null
     */
    public function about(){
        
    }
    
    /**
     * Show Contact Info
     *
     * @return null
     */
    public function contact(){
        
    }
    
    /**
     * Show Previous work
     *
     * @return null
     */
    public function work(){
        
    }
    
    /**
     * Show dashboard
     *
     * @return null
     */
    public function dashboard(){
        
    }
}
