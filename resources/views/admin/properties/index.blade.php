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
        <table class="w-full">
            <thead>
                <tr class="shadow-gray-300 shadow-md">
                    <th>Titre</th>
                    <th>Surface</th>
                    <th>Prix</th>
                    <th>Ville</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr>
                        <td>{{$propery->title}}</td>
                        <td>{{$propery->surface}}</td>
                        <td>{{$propery->price}}</td>
                        <td>{{$propery->city}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection