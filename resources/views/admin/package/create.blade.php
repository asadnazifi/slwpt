@extends('layouts.admin')
@section('content')
<section class="panel">
    <header class="panel-heading">
        اضافه کردن پکیج
 
    </header>
    <div class="panel-body ">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('partioshs.erorrs')
            @include('admin.user.alert')
            <div class="form-group">
                <label for="package_title">عنوان چکیج</label>
                <input type="text"  class="form-control" id="package_title" name="package_title" placeholder="عنوان فایل" value="{{old('package_title',isset($packageItme)?$packageItme->package_title:'')}}" >
            </div>
            
            <div class="form-group">
                <label for="package_price"> قیمت</label>
                <input type="text" class="form-control" id="package_price" name="package_price" placeholder="قیمت" value="{{old('package_price',isset($packageItme)?$packageItme->package_price:'')}}" >
            </div>
       
           
       
          
            <button type="submit" class="btn btn-success btn-lg btn-block" >ذخیره</button>
        </form>

    </div>
</section>
    
@endsection