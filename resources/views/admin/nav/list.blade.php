
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
                        <th>نام منو</th>
                      
                        <th>لینک منو</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
            
                   @if ($nav_all&& count($nav_all)>0)
                   @foreach ($nav_all as $nav)
                   <tr>
                    <td><a href="#">{{$nav->name_nav}}</a></td>
                    <td><a href="#">{{$nav->link_nav}}</a></td>
                    
                   
                                      
                    <td>
                       <a href="{{ route('admin.navs.edit',$nav->id_nav) }}"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
                       <a href="{{ route('admin.navs.delete',$nav->id_nav)}}"><button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a>
                       <a href="{{ route('admin.navs.apend',$nav->id_nav)}}"><button class="btn btn-danger btn-xs"><i class="icon-plus "></i></button></a>
                    </td>
                </tr>
                
                   @endforeach
                       
                   @endif
                 
                   
                </tbody>
            </table>
        </section>
 

    
@endsection
