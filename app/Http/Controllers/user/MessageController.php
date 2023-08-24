<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MessageModel;


class MessageController extends Controller
{
    public function view_feedback()
    {
        $data = MessageModel::get();
        return view("admin/view_feedback", compact("data"));
    }

    public function add_message(Request $request)
    {
       
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
            "phone" => $request->phone,
            
        ];

        MessageModel::create($data);

        return redirect("/#contact");
    }
}
