<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
// use Validator;
use Illuminate\Http\Request;

use App\Models\AjaxUpload;

class AjaxUploadController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function action(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);
        if($validation->passes())
        {
            $image = $request->file('select_file');
            $new_name = rand(). '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            return response()->json([
                'message'  => 'Image Upload Successfully',
                'uploaded_image'    => '<img src="/images/'.$new_name.'" class="img-thumbnail" width="300" />',
                'class_name'    => 'alert-success'
            ]);
        }
        else
        {
            return response()->json([
                'message'  => $validation->errors()->all(),
                'uploaded_image'    => '',
                'class_name'    => 'alert-danger'
            ]);
    }
    }
}
