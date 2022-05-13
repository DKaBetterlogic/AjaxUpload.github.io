<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FormControllerRequest;

use App\Models\Form;

class FormController extends Controller
{
    public function store(FormControllerRequest $request)
    {

        $form = Form::Create($request->all());

        return redirect()->back()->with('message','Form Submitted Succesfully!');
    }
    public function index()
    {
        return view('form');
    }
}
