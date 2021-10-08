<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $user_all=User::all(); 
        
        return view('admin.user.index',compact('user_all'));
    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(UserRequest $userRequest){
        // $this->validate(request(),[
        //   'name' =>'required' ,
        //   'Email' =>'required|email',
        //   'Password'=>'required|min:6|max:12',
        // ],[
        //     'name.required'=>'لطفا نام خود را وارد کنید.'
        // ]);
        $user_date=[
            'name'=>request()->input('name'),
            'email'=>request()->input('Email'),
            'password'=>request()->input('Password'),
            'wallet'=>request()->input('price'),
            'role'=>request()->input('roll'),
            
        ];
        $new_user_create=User::create($user_date);
        if($new_user_create instanceof User){
            return redirect()->route('admin.users.create')->with('success','کاربر جدید با موفقیت ثبت شد');
        }
    }
    public function delete($user_id)
    {
        if($user_id&&ctype_digit($user_id)){
            $userItme=User::find($user_id);
            if($userItme instanceof User){
                $userItme->delete();
                return redirect()->route('admin.users.list')->with('success','کاربر جدید با موفقیت حذف شد');
            }
        }

    }
    public function edit($user_id)
    {
        if($user_id&&ctype_digit($user_id)){
            $userItme=User::find($user_id);
            if($userItme instanceof User){
                return view('admin.user.edit',compact('userItme'));
            }
        }
    }
    public function update(UserRequest $userRequest,$user_id)
    {
        $inpute=[
            'name'=>request()->input('name'),
            'email'=>request()->input('Email'),
            'password'=>request()->input('Password'),
            'wallet'=>request()->input('price'),
            'role'=>request()->input('roll'),
            
        ];
        if(!request()->has('Password')){
            unset($inpute['Password']);
        }
       
        $userItme=User::find($user_id);
        $userItme->update($inpute);
        return redirect()->route('admin.users.list')->with('success','کاربر با موفقیت ویرایش شد');

    }
    public function login()
    {
        return view('admin.login.login');
    }
}
