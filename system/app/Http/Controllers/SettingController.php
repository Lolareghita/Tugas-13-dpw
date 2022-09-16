<?php

namespace App\Http\Controllers;
use Auth;

class SettingController extends Controller{
    function index(){
        $data['user'] = Auth()->user();
        return view('setting.index', $data);
    }

   
}