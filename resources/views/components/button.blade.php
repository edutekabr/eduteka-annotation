<a href="{{Route::has($linkto) ? route($linkto) : ''}}" id="{{$id ?? ''}}">
    <button class="{{$class ?? ''}}">
        {{$slot}}
    </button>
</a>
