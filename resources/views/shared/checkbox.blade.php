@php
    $class ??= null;
@endphp
<divc @class([$class])>
    <input type="hidden" value ="0" name="{{$name}}">
    <input type="checkbox" value ="1" name="{{$name}}" id="{{$name}} role="switch">
    <label for="{{$name}}">{{$label}}</label>
</div>