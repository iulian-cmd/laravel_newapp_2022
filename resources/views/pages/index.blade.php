@extends('layouts/backofficelayout')

@section('content')

<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="wrapper">
    <div class="md:container md:mx-auto">

        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
        @endif

        <div class="w-screen">
            <div class="border-collapse border border-slate-500 shadow">
                <table class="divide-gray-300 table-auto">
                    <thead class="bg-gray-50 w-40">
                        <tr>
                            <th class=" px-6 py-2 text-xs text-gray-500 border border-slate-600 ">ID</th>
                            <th class=" px-6 py-2 text-xs text-gray-500 border border-slate-600">Name</th>
                            <th class="px-6 py-2 text-xs text-gray-500 border border-slate-600">Image</th>
                            <th class="px-6 py-2 text-xs text-gray-500 border border-slate-600">Description</th>
                            <th class="px-6 py-2 text-xs text-gray-500 border border-slate-600">Price</th>
                            <th class="px-6 py-2 text-xs text-gray-500 border border-slate-600">Category</th>
                            <th colspan="2" class="px-6 py-2 text-xs text-gray-500 border border-slate-600">Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach($products as $product)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-500 border border-slate-700">{{$product->id}}
                            </td>
                            <td class="px-6 py-4 border border-slate-700">{{$product->name}}</td>
                            <td class="px-6 py-4 border border-slate-700">{{$product->image}}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 border border-slate-700">
                                {{$product->description}}</td>
                            <td class="px-6 py-4 border border-slate-700">{{$product->price}}</td>
                            @if ($product->category)
                            <td class="px-6 py-4 border border-slate-700">{{$product->category->name}}</td>
                            @endif
                            <td class="px-4 py-1 border border-slate-700"><a
                                    href="{{ route('backoffice.edit', $product->id)}}"
                                    class="px-4 py-2 text-sm text-white bg-blue-400 rounded">Modifier</a></td>
                            <td class="px-4 py-1 border border-slate-700">
                                <form action="{{ route('backoffice.destroy', $product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-4 py-2 text-sm text-white bg-red-400 rounded"
                                        type=" submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection