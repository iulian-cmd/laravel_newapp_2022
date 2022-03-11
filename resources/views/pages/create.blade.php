@extends('layouts/backofficelayout')

@section('content')
<div class="container">
    <div class="max-w-screen-md rounded overflow-hidden shadow-lg p-3 bg-gray-200">
        <div class="font-bold text-xl mb-2">
            Ajouter un Produit
        </div>

        <div class="text-gray-700 text-base">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

            <div class="px-6 py-4">
                <form method="post" action="{{ route('backoffice.store') }}">
                    @csrf
                    <div class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold
                        text-gray-700 mr-0 mb-2 align-end">
                        <label for=" name">Nom de l'aventure:</label>
                        <input type="text"
                            class="w-80 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                            name="name" />
                    </div>

                    <div class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold
                        text-gray-700 mr-0 mb-2">
                        <label for="image">Image (url):</label>
                        <input type="text"
                            class="w-80 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                            name="image" />
                    </div>

                    <div class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold
                        text-gray-700 mr-0 mb-2">
                        <label for="description">Description:</label>
                        <input type="text"
                            class="w-80 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                            name="description" />
                    </div>

                    <div class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold
                        text-gray-700 mr-0 mb-2">
                        <label for="price">Prix:</label>
                        <input type="text"
                            class="w-80 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                            name="price" />
                    </div>
                    <div class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold
                        text-gray-700 mr-0 mb-2">
                        <label for="category_id">Category:</label>
                        <input type="text"
                            class="w-80 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                            name="category_id" />
                    </div>
                    <div class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold
                        text-gray-700 mr-0 mb-2">
                        <label for="distance">Distance:</label>
                        <input type="text"
                            class="w-80 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                            name="distance" />
                    </div>
                    <div class="inline-block bg-gray-200 px-3 py-1 text-sm font-semibold
                        text-gray-700 mr-0 mb-2">
                        <label for="group_size">Group Size:</label>
                        <input type="text"
                            class="w-80 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"
                            name="group_size" />
                    </div>
                    <button type="submit"
                        class="px-4 py-2 my-2 text-sm text-white bg-green-500 rounded">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection