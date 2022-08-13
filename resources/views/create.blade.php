@extends('app')

@section('title', 'Ajouter un evenement')

@section('content')
<div class="mt-8 bg-white shadow-md rounded p-6">
    <h1 class="text-xl font-medium text-center">ENREGISTRER UN EVENEMENT</h1>
    <form action="{{route('evenement.store')}}" method="POST" class="p-2 space-y-4">
        @csrf
        <div class="flex flex-row space-x-2">
            <div class="w-1/2">
                <label for="nom" class="">Nom</label>
                <input type="text" id="nom" name="nom" required
                    class="rounded-md bg-cyan-50 mt-1 p-2 border-0 w-full" />
            </div>
            <div class="w-1/2">
                <label for="description" class="">Description</label>
                <input type="text" id="description" name="description"
                    class=" rounded-md bg-cyan-50 mt-1 p-2 border-0 w-full" />
            </div>
        </div>
        <div class="flex flex-row space-x-2">
            <div class="w-1/2">
                <label for="date_demarrage" class="">Date demarrage</label>
                <input type="date" id="date_demarrage" name="date_demarrage"
                    class=" rounded-md bg-cyan-50 mt-1 p-2 border-0 w-full" />
            </div>
            <div class="w-1/2">
                <label for="date_fin" class="">Date fin</label>
                <input type="date" id="date_fin" name="date_fin"
                    class=" rounded-md bg-cyan-50 mt-1 p-2 border-0 w-full" />
            </div>
        </div>
    </form>
</div>
@endsection
