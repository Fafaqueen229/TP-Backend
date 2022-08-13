@extends('app')

@section('title', 'Liste evenement')

@section('content')
<div class="p-2 mt-8 bg-white shadow-md rounded">
    <table class="text-sm text-left w-full">
        <thead class="text-xs uppercase">
            <tr>
                <th scope="col" class="p-3">Nom</th>
                <th scope="col" class="p-3">Description</th>
                <th scope="col" class="p-3">Date Demarrage</th>
                <th scope="col" class="p-3">Date Fin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evenements as $evenement)
            <tr class="border-b">
                <td class="px-3 py-4 text-center"> {{$evenement->nom}} </td>
                <td class="px-3 py-4 text-center"> {{$evenement->description}} </td>
                <td class="px-3 py-4 text-center"> {{$evenement->date_demarrage}} </td>
                <td class="px-3 py-4 text-center"> {{$evenement->date_fin}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
