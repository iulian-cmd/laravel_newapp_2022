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
              <label for="price">Prix :</label>
              <input type="text" class="form-control" name="price" value="{{ $products->price }}"/>
          </div>

          <div class="form-group">
            <label for="category_id">Catégorie :</label>
            <select class="form-control" name="category_id">
                <option value="">--Please choose an category--</option>
                @foreach ( $categories as $category )
                <option value="{{ $category->id }}">{{ $category->name}}</option>
                @endforeach
            </select>
        </div>
          <button type="submit" class="btn btn-primary mt-3">Modifier</button>
      </form>
  </div>
</div>
@endsection
