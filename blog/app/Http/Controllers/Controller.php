<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show(){
    	return view('form');
    }
    public function index(){
    	return view('imageshow');
    }


    public function store(Request $request)
    {
        $data=new dsi_data;
        if($request->file('file')){
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/',$filename);
            $data->file=$filename;
        }
        $data->title=$request->title;
         $data->link=$request->link;
         $data->price=$request->price;

        $data->save();
        return redirect()->back();
    }
}
