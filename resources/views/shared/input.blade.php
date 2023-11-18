@php
$label  ??= null;
$type   ??= 'text';
$class  ??= null;
$name   ??= '';
$value   ??= '';

    
@endphp
<div>
    <label for="{{ $name }}">{{$label}}</label>
    <input @class([$class]) type={{ $type }} name="{{ $name }}" id="{{ $name }}" value="{{old($name,$value)}}">
    <div>
        @error($name)
        <div class="text-red-700">
            {{ $message}}
        </div>
    @enderror
    </div>
</div>