@extends('layouts/backofficelayout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le produit
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

      <form method="post" action="{{ route('backoffice.update', $products->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nom :</label>
              <input type="text" class="form-control" name="name" value="{{ $products->name }}"/>
          </div>

          <div class="form-group">
            <label for="image">Image :</label>
            <input type="text" class="form-control" name="image" value="{{ $products->image }}"/>
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" name="description" value="{{ $products->description }}"/>
        </div>

          <div class="form-group">
              <label for="cases">Prix :</label>
              <input type="text" class="form-control" name="prix" value="{{ $products->price }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection