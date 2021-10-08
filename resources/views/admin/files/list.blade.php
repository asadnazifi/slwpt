@extends('layouts.admin')
@section('content')
@include('admin.user.alert')

<section class="panel">
    <header class="panel-heading">
        لیست فایل ها
 
    </header>
    <table class="table table-striped table-advance table-hover">
        <thead>
            <tr>
                <th>شناسه</th>
                <th>عنوان فایل</th>
              
                <th>نوع فایل</th>
                <th>سایز فایل</th>
                
                <th>نام فایل</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
    
           @if ($files&& count($files)>0)
           @foreach ($files as $file)
           <tr>
            <td><a href="#">{{$file->file_id}}</a></td>
            <td><a href="#">{{$file->file_title}}</a></td>
            
            <td>{{$file->file_type}}</td>
            <td>{{$file->file_size}}</td>
            <td class="col-sm-2" ><img class="col-sm-6" src="../file/{{$file->file_name}}" alt=""></td>                    <td>
               <a href="{{ route('admin.files.edit',$file->file_id) }}"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
               <a href="{{ route('admin.files.delete',$file->file_id)}}"><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a>
            </td>
        </tr>
        
           @endforeach
               
           @endif
         
           
        </tbody>
    </table>
</section>
@endsection