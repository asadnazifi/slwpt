@extends('layouts.admin')
@section('content')
<section class="panel">
    <header class="panel-heading">
        فورم ثبت کاربر
 
    </header>
    <div class="panel-body ">
        <form role="form" action="" method="POST">
            {{ csrf_field() }}
            @include('partioshs.erorrs')
            @include('admin.user.alert')
            <div class="form-group">
                <label for="name">نام</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="نام خود را وارد کنید" value="{{old('name')}}" >
            </div>
            <div class="form-group">
                <label for="Email1">ایمیل</label>
                <input type="text" class="form-control" id="Email1" name="Email" placeholder="Enter email"  value="{{old('Email')}}" >
            </div>
            <div class="form-group">
                <label for="Password1">رمز</label>
                <input type="password" class="form-control" id="Password1" name="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="price">مقدار موجودی</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="کیف پول" value="{{old('price',0)}}">
            </div>
            <div class="form-group">
                <label for="roll">وضعیت کاربر</label>
                <select class="form-control m-bot15" id="roll" name="roll">
                    <option value="1">کاربر عادی</option>
                    <option value="2" >ویژه</option>
                    <option value="3" >ادمین</option>
                </select>
            </div>
          
           
           
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit_save_user">ذخیره</button>
        </form>

    </div>
</section>
    
@endsection