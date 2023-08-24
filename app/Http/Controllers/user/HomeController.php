<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventModel;


class HomeController extends Controller
{
    public function home()
    {
        $event = EventModel::get();
        return view(
            "users/index",
            compact("event")
        );
    }
}
