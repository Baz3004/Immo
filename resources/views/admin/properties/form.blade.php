@extends('admin.admin')

@section('content')

<div class="w-full py-10 px-96">
    <h1 class="text-3xl font-bold">
        @if ($property->exists)
            Modifier un bien
        @else
            Creer un bien
        @endif
    </h1>
    <form action="{{route($property->exists ? 'admin.property.update' : 'admin.property.store', $property)}}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')
        <div>
            <div class="grid grid-cols-4 gap-5 mb-3">
                <div class="col-span-2">
                    @include('shared.input',['label'=>'Titre','name'=>'title','value'=>$property->title,'class'=>'border w-full'])
                </div>
                <div>
                    @include('shared.input',['label'=>'Surface','name'=>'surface','value'=>$property->surface,'class'=>'border w-full'])
                </div>
                <div>
                    @include('shared.input',['label'=>'Prix','name'=>'price','value'=>$property->price,'class'=>'border w-full'])
                </div>
            </div>
            <div>
                @include('shared.input',['type'=>'textarea','label'=>'description','name'=>'price','value'=>$property->price,'class'=>'border w-full'])
            </div>
            <button class="bg-blue-500 text-white p-2 rounded-md">
                @if ($property->exists)
                    Update
                @else
                    Store    
                @endif
            </button>
        </div>
    </form>
</div>
@endsection