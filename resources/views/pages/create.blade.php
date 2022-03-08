@extends('layouts/backofficelayout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

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
.         @csrf
          <div class="form-group">
              <label for="name">Nom de l'aventure :</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
            <label for="image">Image(url) :</label>
            <input type="text" class="form-control" name="image"/>
        </div>

        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" name="description"/>
        </div>

          <div class="form-group">
              <label for="price">Prix :</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
      </form>
  </div>
</div>
@endsection
