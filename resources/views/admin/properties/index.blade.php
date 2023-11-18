@extends('admin.admin')

@section('title') 

@endsection
@section('content')
    <div class="w-full px-96">
        <div class="flex justify-between mt-5 mb-3">
            <h1 class="text-2xl font-bold">Les biens</h1>
            <div class="bg-blue-500 text-white rounded-md py-2 px-3">
                <a href="{{route('admin.property.create')}}">Ajouter un bien</a>
            </div>
        </div>
        <table class="w-full text-start">
            <thead>
                <tr class="shadow-gray-300 shadow-md">
                    <th class="text-start">Titre</th>
                    <th class="text-start">Surface</th>
                    <th class="text-start">Prix</th>
                    <th class="text-start">Ville</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr class="bg-gray-200 border border-gray-400 border-x-0">
                        <td class=" py-2">{{$property->title}}</td>
                        <td class=" py-2">{{$property->surface}} m2</td>
                        <td class=" py-2">{{ number_format($property->price, thousands_separator:' ') }}</td>
                        <td class=" py-2">{{$property->city}}</td>
                        <td class=" py-2 flex items-center gap-2">
                            <div>
                                <a href="{{route('admin.property.edit', $property)}}" class="bg-blue-500 text-white py-2 px-3">Modifier</a>
                            </div>
                            <form action="{{route('admin.property.destroy', $property)}}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" class="bg-red-500 text-white py-2 px-3" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $properties->links() }}
        </div>
    </div>
    
@endsection