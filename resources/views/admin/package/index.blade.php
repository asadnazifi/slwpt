@extends('layouts.admin')
@section('content')
@include('admin.user.alert')

        <section class="panel">
            <header class="panel-heading">
               مدیریت پکیج ها
         
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                       
                        <th>عنوان</th>
                        <th>قیمت</th>
                        <th>تعداد فایل</th>

                        <th>عملیات</th>
                       
                    </tr>
                </thead>
                <tbody>
            
                   @if ($packages&& count($packages)>0)
                   @foreach ($packages as $package)
                   <tr>
                    <td><a href="#">{{$package->package_title}}</a></td>
                    <td><a href="#">{{$package->package_price}}</a></td>
                    <td><a href="#">{{$package->files()->get()->count()}}</a></td>
                   
                    
                    <td>
                       <a href="{{ route('admin.packages.edit',$package->package_id) }}"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
                       <a href="{{ route('admin.packages.delete',$package->package_id)}}"><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a>
                       <a href="{{ route('admin.packages.file',$package->package_id)}}"><button class="btn btn-danger btn-xs"><i class="icon-folder-close "></i></button></a>
                    </td>
                </tr>
                
                   @endforeach
                       
                   @endif
                 
                   
                </tbody>
            </table>
        </section>
 

    
@endsection
