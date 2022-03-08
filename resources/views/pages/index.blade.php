@extends('layouts/backofficelayout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Image</td>
          <td>Description</td>
          <td>Price</td>
          <td>Category</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->image}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            @if ($product->category)
                 <td>{{$product->category->name}}</td>
            @endif
            <td><a href="{{ route('backoffice.edit', $product->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('backoffice.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
