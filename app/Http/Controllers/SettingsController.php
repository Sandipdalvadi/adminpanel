<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function form()
    {
        $settings = Settings::all();
        return view('admin.settings.form');
    }
    
    public function store(Request $request)
    {   
        
    }
}
