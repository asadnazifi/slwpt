@if (session('success'))
<div class="alert alert-block alert-success fade in">
    <button data-dismiss="alert" class="close close-sm" type="button">
        <i class="icon-remove"></i>
    </button>
    

    <p>{{ session('success') }}</p>
    

</div>
    
@endif
