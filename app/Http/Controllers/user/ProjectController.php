<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project(){
        return view('users/project');
    }
}
