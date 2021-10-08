@extends('layouts.admin')
@section('content')
<section class="panel">
    <header class="panel-heading">
        فرم ثبت منو
    </header>
    <div class="panel-body ">
        <form role="form" action="" method="POST">
            {{ csrf_field() }}
            @include('partioshs.erorrs')
            @include('admin.user.alert')
            <div class="form-group">
                <label for="name">نام منو</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="نام منو را وارد کنید" value="{{old('name')}}" >
            </div>
            <div class="form-group">
                <label for="Email1">لینک</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Enter link"  value="{{old('link')}}" >
            </div>
            
          
           
           
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit_save_user">ذخیره</button>
        </form>

    </div>
</section>
    
@endsection