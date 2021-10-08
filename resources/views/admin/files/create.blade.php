@extends('layouts.admin')
@section('content')
<section class="panel">
    <header class="panel-heading">
        ذخیره فایل
 
    </header>
    <div class="panel-body ">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('partioshs.erorrs')
            @include('admin.user.alert')
            <div class="form-group">
                <label for="file_title">عنوان فایل</label>
                <input type="text" class="form-control" id="file_title" name="file_title" placeholder="عنوان فایل" value="{{old('file_title',isset($fileItme)?$fileItme->file_title:'')}}" >
            </div>
       
            <div class="form-group">
                <label for="file_description">توضیحات فایل</label>
                <textarea cols="10" rows="10" class="form-control " id="file_description" name="file_description" >{{old('file_description',isset($fileItme)?$fileItme->file_description:'')}}</textarea>
            </div>
          
            <input type="file" class="btn btn-default" name="fileItem">
           
            
            <button type="submit" class="btn btn-success btn-lg btn-block" >ذخیره</button>
        </form>

    </div>
</section>
    
@endsection