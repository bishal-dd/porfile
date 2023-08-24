<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventModel;


class EventController extends Controller
{

    public function get_event()
    {
        $data = EventModel::get();
        return view("admin/add_event", compact("data"));
    }

    public function add_event(Request $request)
    {
        $files = $request->event_image;
        $file_name = "";
        $file_store_path = "event_images";

        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $files->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        }
        $data = [
            "title" => $request->name,
            "image" => $file_name,
            "description" => $request->description,
            "url" => $request->url,
            
        ];

        EventModel::create($data);

        return redirect("/dashboard/add_event");
    }
    public function edit_event(Request $request)
    {
        $files = $request->event_image;
        $file_name = "";
        $file_store_path = "event_images";

        if ($files != null && $files != "") {
            if (!is_dir($file_store_path)) {
                mkdir($file_store_path, 0777, true);
            }

            $original_file_name = $files->getClientOriginalName();
            $file_name =
                time() . "_" . str_replace(" ", "_", $original_file_name);

            move_uploaded_file($files, $file_store_path . "/" . $file_name);
        } else {
            $existing_photo = EventModel::where("id", $request->edit_id)->value(
                "image"
            );
            $file_name = $existing_photo;
        }

        $data = [
            "title" => $request->name,
            "image" => $file_name,
            "url" => $request->url,
            "description" => $request->description,
            
        ];

        EventModel::where("id", $request->edit_id)->update($data);

        return redirect("/dashboard/add_event");
    }

    public function delete_event($id)
    {
        $slider = EventModel::find($id);

        if ($slider) {
            $imagePath = public_path("event_images/" . $slider->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $slider->delete();
        }

        return redirect("/dashboard/add_event");
    }
}
