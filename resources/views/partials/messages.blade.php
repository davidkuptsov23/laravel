@if(session('flash_message'))
    <div class="flash-message">
        <p class="alert alert-success">
            {{ session('flash_message') }}
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        </p>
    </div>
@endif
<div class="alert-zone"></div>
{{--@if ($errors->any())--}}
{{--<ul class="alert alert-danger">--}}
{{--@foreach ($errors->all() as $error)--}}
{{--<li>{{ $error }}</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--<hr/>--}}
{{--@endif--}}