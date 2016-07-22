<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Role;
use App\Setting;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

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

    public function settings()
    {
        $roles = Role::lists('name', 'name');
        return view('settings', compact('roles'));
    }

    public function updateSettings(Request $request)
    {
        $settings = $request->except('_token');
    
        Setting::set($settings);
        Flash::success('Settings have been saved successfully');
        return redirect('settings');
    }
}
