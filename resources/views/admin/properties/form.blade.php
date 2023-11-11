@extends('admin.admin')

@section('content')

<div>
    <h1>
        @if ($properties->exists)
            Modifier un bien
        @else
            Creer un bien
        @endif
    </h1>
    <form action="{{route($properties->exists ? 'admin.property.update' : 'admin.property.store', $properties)}}" method="post">
        @csrf
    </form>
</div>
@endsection