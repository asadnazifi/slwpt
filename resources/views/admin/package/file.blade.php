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

                <th>عنوان فایل</th>

                <th>اضافه کردن فایل به پکیچ</th>
            </tr>
        </thead>
        <tbody>

            @if ($files&& count($files)>0)
            <form role="form" action="" method="POST">
                {{ csrf_field() }}
                @foreach ($files as $file)
                <tr>
                    <td><a href="#">{{$file->file_title}}</a></td>

                    <td>
                        <input  name="files[]" type="checkbox" value="{{$file->file_id}}"{{ isset($package_files)&& in_array($file->file_id,$package_files)?'checked':'' }} >
                    </td>
                </tr>

                @endforeach
                

                   <td> <button type="submit" class="btn btn-success btn-lg btn-block">ذخیره</button></td>
               
                 

               

            </form>

            @endif


        </tbody>
    </table>
</section>
@endsection