<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\nav_bar;
use App\Models\zer_nav;
use Illuminate\Http\Request;

class NavsController extends Controller
{
    public function index()
    {
        $nav_all=nav_bar::all();
        
        return view("admin.nav.list",compact("nav_all"));
    }
    public function created()
    {
        return view('admin.nav.created');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'link'=>'required',
        ],[
            'name.required'=>'لطفا نام منو را واردکنید',
            'link.required'=>'لطفا برای منو خود یک لینک درست کنید',
        ]);
        $nav_data=[
            'name_nav'=>$request->input('name'),
            'link_nav'=>$request->input('link'),
            
            
        ];
        $new_creatde_nav=nav_bar::create($nav_data);
        
        
        if($new_creatde_nav){
            return redirect()-> route('admin.navs.list')->with('sucess','منو با موفقیت ثبت شد');
        }

    }
    public function edit($id_nav)
    {
        dd($id_nav);
    }
    public function delete()
    {
        
    }
    public function synnav(Request $request)

    {
        $zernav_data=[
            'name_navs'=>request()->input('name'),
            'link_navs'=>request()->input('link'),
        ];
        $new_createde_zer_nav=zer_nav::create($zernav_data);
        if($new_createde_zer_nav){
            return view('admin.nav.creatde_zer_nav')->with('sucess','زیر منو با موفقیت ثبت شد');
        }
        

    }
    public function apind()
    {
        return view('admin.nav.creatde_zer_nav');
    }
    public function plus(){
        $data_zer_navs=zer_nav::all();
        return view('admin.nav.apend',compact('data_zer_navs'));
    }
    public function apends(Request $request,$id_nav)
    {
        $nav_itam=nav_bar::find($id_nav);
         $navs=$request->input('id');
         
            $nav_itam->nav_zernav()->sync($navs);
            return redirect()->route('admin.navs.list')->with('success','عملیات با موفقیت اجرا شد');
         

    }
    
}
