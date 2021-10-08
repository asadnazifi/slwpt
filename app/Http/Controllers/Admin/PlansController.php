<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use PDO;

class PlansController extends Controller
{
    public function index()
    {
        $plans=Plan::all();
        return view('admin.plan.index',compact('plans'));
    }
    public function create()
    {
        return view('admin.plan.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'plan_title'=> 'required',
            'plan_lmit_download_count'=> 'required',
            'plan_price'=> 'required',
            'plan_days_count'=> 'required',


        ]);
        $new_pan=Plan::create([
            'plan_title'=>$request->input('plan_title'),
            'plan_lmit_download_count'=>$request->input('plan_lmit_download_count'),
            'plan_price'=>$request->input('plan_price'),
            'plan_days_count'=>$request->input('plan_days_count'),

        ]);
        if($new_pan){
            return redirect()->route('admin.plans.list')->with('success','طرح جدید با موفقیت ثبت شد');
        }
    }
    public function delete(Request $request,$plan_id)
    {
        if($plan_id&&ctype_digit($plan_id)){
            $planItme=Plan::find($plan_id);
            if($planItme instanceof Plan){
                $planItme->delete();
                return redirect()->route('admin.plans.list')->with('success','طرح با موفقیت حذف شد');
            }
        }
    }
    public function edit(Request $request,$plan_id)
    {
        $plan_id=intval($plan_id);
        $planItme=Plan::find($plan_id);
        if($planItme){
            return view('admin.plan.edit',compact('planItme'));
        }
        
    }
    public function update(Request $request,$plan_id)

    {
        $inpute=[
            'plan_title'=>request()->input('plan_title'),
            'plan_lmit_download_count'=>request()->input('plan_lmit_download_count'),
            'plan_price'=>request()->input('plan_price'),
            'plan_days_count'=>request()->input('plan_days_count'),
           
            
        ];
        
        $planItme=Plan::find($plan_id);
        $result=$planItme->update($inpute);
        if($result){
            return redirect()->route('admin.plans.list')->with('success','اطلاعات با موفقیت ویرایش شد');
        }
        
    }
}
