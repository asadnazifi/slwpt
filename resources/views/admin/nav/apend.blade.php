@extends('layouts.admin')
@section('content')
<form action="" method="POST">
    {{ csrf_field() }}
    <select name="id" class="form-control m-bot15" >
        @foreach ($data_zer_navs as $data_zer_nav)
        <option value="{{$data_zer_nav->id_zernav}}">{{$data_zer_nav->name_navs}}</option>
        @endforeach




    </select>

    <button type="submit" class="btn btn-success btn-lg btn-block">ذخیره</button>

</form>
@endsection
