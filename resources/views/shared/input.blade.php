@php
$label  ??= null;
$type   ??= 'text';
$class  ??= null;
$name   ??= '';
$value   ??= '';

    
@endphp
<div>
    <label for="{{ $name }}">{{$label}}</label>
    @if ($type === 'textarea')
        <textarea @class([$class]) type={{ $type }} name="description" id="{{ $name }}">
            {{old($name,$value)}}
        </textarea>
    @else
        <input @class(['px-4 py-2 text-gray-500 rounded-md',$class]) type={{ $type }} name="{{ $name }}" id="{{ $name }}" value="{{old($name,$value)}}">
    @endif
    <div>
        @error($name)
        <div class="text-red-700">
            {{ $message}}
        </div>
    @enderror
    </div>
</div>