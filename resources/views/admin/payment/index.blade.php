@extends('layouts.admin')
@section('content')
@include('admin.user.alert')

        <section class="panel">
            <header class="panel-heading">
                
         
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                       
                        <th>کاربر</th>
                      
                        <th>مبلغ</th>
                        <th>نوع</th>
                        <th>بانک</th>
                        <th>تاریخ پرداخت</th>
                        <th>وضعیت</th>
                        <th>شماره رزرف</th>
                        <th>شماره ارجاع</th>
                        <th>عملیات</th>
                        
                       
                    </tr>
                </thead>
                <tbody>
            
                   @if ($payments&& count($payments)>0)
                   @foreach ($payments as $payment)
                   <tr>
                    <td><a href="#">{{$payment->user->name}}</a></td>
                    <td><a href="#">{{ number_format($payment->payment_amount) }}</a></td>
                    <td><a href="#">{{$payment->payment_method_formt()}}</a></td>
                    <td><a href="#">{{$payment->payment_gateway_name}}</a></td>
                    <td><a href="#">{{$payment->payment_created_at }}</a></td>
                    <td><a href="#">{{$payment->payment_status_formt()}}</a></td>
                    <td><a href="#">{{$payment->payment_res_num}}</a></td>
                    <td><a href="#">{{$payment->payment_ref_num}}</a></td>
                    
                    <td>
                       <a href="{{ route('admin.plans.edit',$payment->payment_id) }}"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
                       <a href="{{ route('admin.plans.delete',$payment->payment_id)}}"><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a>
                    </td>
                </tr>
                
                   @endforeach
                       
                   @endif
                 
                   
                </tbody>
            </table>
        </section>
 

    
@endsection
