<?php

namespace App\Http\Controllers\Admin;
use App\Models\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {
        $files=File::all();
        return view('admin.files.list',compact('files'));
    }
    public function create()
    {
        return view('admin.files.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'file_title'  =>'required',
            'fileItem'    =>'required',


        ],[
           'file_title.required' =>'وارد کردن نام فایل الزامی است',
           'fileItem.required' =>'انتخاب فایل الزامی است',

        ]);
        $new_file_data=[
            'file_title' =>$request->input('file_title'),
            'file_description' =>$request->input('file_description'),
            'file_type' =>$request->file('fileItem')->getMimeType(),
            'file_size' =>$request->file('fileItem')->getSize(),
            
        ];
        $str=rand();
        $new_file_name= sha1($str).'.'.$request->file('fileItem')->getClientOriginalExtension();
       $result= $request->file('fileItem')->move(public_path('file'),$new_file_name);
        if($result instanceof \symfony\Component\HttpFoundation\File\File  ){
      
            $new_file_data['file_name']=$new_file_name;
            File::create($new_file_data);
            return redirect()->route('admin.files.list')->with('success','فایل  با مفقیت ذخیره شد');
        }
       
    }
    public function update()
    {

    }public function delete()
    {

    }
    public function edit()
    {
        
    }
}
