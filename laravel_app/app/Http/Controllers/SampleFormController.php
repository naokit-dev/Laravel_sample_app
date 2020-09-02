<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleFormController extends Controller
{
    private $formItems = ["name", "title", "body"];

    function show(){
        return view("form");
    }

    function post(Request $request){
        $input = $request->only($this->formItems);

        //セッションに書き込む
        $request->session()->put("form_input", $input);
        
        //redirect to @confirm
        return redirect()->action("SampleFormController@confirm");

    }

    function confirm(Request $request){
        $input = $request->session()->get("form_input");

        return view("form_confirm", ["input" => $input]);
    }

    function send(Request $request){
        $input = $request->session()->get("form_input");

        // redirect to @show if request include "back"
        if($request->has("back")){
            return redirect()->action("SampleFormController@show")->withInput($input);
        }

        //***add send acction***

        //clear session
        $request->session()->forget("form_input");
        
        return redirect()->action("SampleFormController@complete");
    }

    function complete(){
        return view("form_complete");
    }
}
