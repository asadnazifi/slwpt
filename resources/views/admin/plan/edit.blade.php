@extends('layouts.admin')
@section('content')
<section class="panel">
    <header class="panel-heading">
        ویرایش کاربر
     
    </header>
    <div class="panel-body ">
        <form role="form" action="" method="POST">
            {{ csrf_field() }}
            @include('partioshs.erorrs')
            @include('admin.user.alert')
            <div class="form-group">
                <label for="name">نام طرح</label>
                <input type="text" class="form-control" id="plan_title" name="plan_title" placeholder="نام خود را وارد کنید" value="{{old('plan_title',isset($planItme)?$planItme->plan_title:'')}}" >
            </div>
            <div class="form-group">
                <label for="plan_lmit_download_count">تعداد روز محدودیت</label>
                <input type="text" class="form-control" id="plan_lmit_download_count" name="plan_lmit_download_count" placeholder="Enter email"  value="{{old('plan_lmit_download_count',isset($planItme)?$planItme->plan_lmit_download_count:'')}}" >
            </div>
          
            <div class="form-group">
                <label for="plan_price">قیمت</label>
                <input type="number" class="form-control" id="plan_price" name="plan_price" placeholder="کیف پول" value="{{old('plan_price',isset($planItme)?$planItme->plan_price:'')}}">
            </div>
            <div class="form-group">
                <label for="plan_days_count">تعداد روز اعتبار</label>
                <input type="number" class="form-control" id="plan_days_count" name="plan_days_count" placeholder="کیف پول" value="{{old('plan_days_count',isset($planItme)?$planItme->plan_days_count:'')}}">
            </div>
         
          
     
            <button type="submit" class="btn btn-success btn-lg btn-block" >ذخیره</button>
        </form>

    </div>
</section>
    
@endsection