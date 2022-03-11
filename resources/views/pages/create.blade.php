@extends('layouts/backofficelayout')

@section('content')

<div class="card uper">
    <div class="card-header">
        Ajouter un Produit
    </div>

    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <form method="post" action="{{ route('backoffice.store') }}">
            @csrf
            <div class="flex flex-col gap-y-2">
                <label for="name">Nom de l'aventure:</label>
                <input type="text" class="w-1/3 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                    name="name" />
            </div>

            <div class="flex flex-col gap-y-2">
                <label for="image">Image (url):</label>
                <input type="text" class="w-1/3 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                    name="image" />
            </div>

            <div class="flex flex-col gap-y-2">
                <label for="description">Description:</label>
                <input type="text" class="w-1/3 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                    name="description" />
            </div>

            <div class="flex flex-col gap-y-2">
                <label for="price">Prix:</label>
                <input type="text" class="w-1/3 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                    name="price" />
            </div>
            <button type="submit" class="px-4 py-2 my-2 text-sm text-white bg-green-500 rounded">Ajouter</button>
        </form>
    </div>
</div>
@endsection