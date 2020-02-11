@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('editDeadline'))
    <div class="alert alert-success">
        {{session('editDeadline')}}
    </div>
@endif
@if(session('liked'))
    <div class="alert alert-success">
        {{session('liked')}}
    </div>
@endif
@if(session('updated'))
    <div class="alert alert-success">
        {{session('updated')}}
    </div>
@endif
