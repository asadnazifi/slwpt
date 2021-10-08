<?php

namespace App\Http\Controllers\Admin;
use App\Models\Package;
use App\Http\Controllers\Controller;
use App\Models\File;
use Hamcrest\Arrays\IsArray;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $packages=Package::all();
        return view('admin.package.index',compact('packages'));
    }
     public function create()
     {
        return view('admin.package.create');
     }

     public function store()
     {

     }


     public function edit()
     {

     }

     public function delete()
     {

     }

     public function update()
     {

     }

     public function file(Request $request,$package_id)
     {
       
         $files=File::all();
         $package_itam=Package::find($package_id);
         $package_files=$package_itam->files()->get()->pluck('file_id')->toArray();
        
        //  $files_ids=[];
        // foreach($package_files as $file){
        //     $files_ids[]=$file->file_id;
        // }


        return view('admin.package.file',compact("files",'package_files'));
     }
     public function synfile(Request $request,$package_id)
     {
         $package_itam=Package::find($package_id);
         $files=$request->input('files');
         if($package_itam && is_array($files)){
            $package_itam->files()->sync($files);
            return redirect()->route('admin.packages.list')->with('success','عملیات با موفقیت اجرا شد');
         }
     }

}
