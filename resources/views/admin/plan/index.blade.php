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
                       
                        <th>عنوان</th>
                      
                        <th>محدودیت دانلود </th>
                        <th>قیمت</th>
                        <th>تعداد روز اعتبار</th>
                        <th>عملیات</th>
                       
                    </tr>
                </thead>
                <tbody>
            
                   @if ($plans&& count($plans)>0)
                   @foreach ($plans as $plan)
                   <tr>
                    <td><a href="#">{{$plan->plan_title}}</a></td>
                    <td><a href="#">{{$plan->plan_lmit_download_count}}</a></td>
                    <td><a href="#">{{$plan->plan_price}}</a></td>
                    <td><a href="#">{{$plan->plan_days_count}}</a></td>
                    
                    <td>
                       <a href="{{ route('admin.plans.edit',$plan->plan_id) }}"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
                       <a href="{{ route('admin.plans.delete',$plan->plan_id)}}"><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a>
                    </td>
                </tr>
                
                   @endforeach
                       
                   @endif
                 
                   
                </tbody>
            </table>
        </section>
 

    
@endsection
