@if ($errors->any())
<div class="alert alert-block alert-danger fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="icon-remove"></i>
    </button>
    
    @foreach ($errors->all() as $erorr)
    <p>{{$erorr}}</p>
    
    @endforeach
</div>

    
@endif