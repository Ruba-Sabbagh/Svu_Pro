<?php

namespace App\Http\Controllers\EmployeePanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('pages.employe.dashboard');
    }
}
