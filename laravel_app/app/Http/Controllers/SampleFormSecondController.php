<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class SampleFormSecondController extends Controller
{
    private $formItems = ["title", "body"];

    private $validator = [
		"title" => "required|string",
		"body" => "required|string"
	];

    function show(){
        return view("form_2");
    }

    function post(Request $request){
        $input = $request->only($this->formItems);

        //validation 
        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){
			return redirect()->action("SampleFormSecondController@show")
				->withInput()
				->withErrors($validator);
		}

        //セッションに書き込む
        $request->session()->put("form_input", $input);
        
        //redirect to @confirm
        return redirect()->action("SampleFormSecondController@confirm");

    }

    function confirm(Request $request){
        $input = $request->session()->get("form_input");

        return view("form_confirm_2", ["input" => $input]);
    }

    function send(Request $request){
        $input = $request->session()->get("form_input");

        // redirect to @show if request include "back"
        if($request->has("back")){
            return redirect()->action("SampleFormSecondController@show")->withInput($input);
        }

        //***add send acction***

        //clear session
        $request->session()->forget("form_input");
        
        return redirect()->action("SampleFormSecondController@complete");
    }

    function complete(){
        return view("form_complete_2");
    }

}
