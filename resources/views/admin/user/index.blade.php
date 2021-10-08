@extends('layouts.admin')
@section('content')
@include('admin.user.alert')

        <section class="panel">
            <header class="panel-heading">
                مدیریت کاربران
         
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>شناسه</th>
                        <th>نام کاربر</th>
                      
                        <th>رمز کاربر</th>
                        <th>ایمیل کاربر</th>
                        <th>وضعیت کاربر</th>
                        <th>موجودی</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
            
                   @if ($user_all&& count($user_all)>0)
                   @foreach ($user_all as $user)
                   <tr>
                    <td><a href="#">{{$user->id}}</a></td>
                    <td><a href="#">{{$user->name}}</a></td>
                    
                    <td>{{$user->password}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="#">{{$user->wallet}}</a></td>                    <td>
                       <a href="{{ route('admin.users.edit',$user->id) }}"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
                       <a href="{{ route('admin.users.delete',$user->id)}}"><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a>
                    </td>
                </tr>
                
                   @endforeach
                       
                   @endif
                 
                   
                </tbody>
            </table>
        </section>
 

    
@endsection
