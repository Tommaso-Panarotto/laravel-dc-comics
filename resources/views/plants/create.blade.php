@extends("layouts.app")

@section("head-title", "add a new plant")

@section("main-content")
<div class="container text-center">
  <h1 class="mt-5">Aggiungi una nuova pianta</h1>

  @if ($errors->any())
  <div class="alert alert-info">
      <ul>
          @foreach ($errors->all() as $error)
          <li>
              {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

  <form class="mt-5" method="POST" action="{{route("plant.store")}}">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">nome pianta:</label>
      <input type="text" class="form-control" id="plant-name" name="name" value="{{ old('name')}}">
    </div>
    <div class="mb-3">
        <label for="species" class="form-label">specie pianta:</label>
        <input type="text" class="form-control" id="plant-species" name="species" value="{{ old('species')}}">
      </div>
      <div class="mb-3">
        <label for="habitat" class="form-label">habitat pianta:</label>
        <input type="text" class="form-control" id="plant-habitat" name="habitat" value="{{ old('habitat')}}">
      </div>
      <div class="mb-3">
        <label for="exposure" class="form-label">esposizione pianta:</label>
        <input type="text" class="form-control" id="plant-exposure" name="exposure" value="{{ old('exposure')}}">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">descrizione pianta:</label>
        <input type="text" class="form-control" id="plant-description" name="description" value="{{ old('description')}}">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">immagine pianta:</label>
        <input type="text" class="form-control" id="plant-image" name="image" value="{{ old('image')}}">
      </div>
      <div class="buttons">
          <button type="submit" class="btn btn-primary">Invia</button>
          <button type="reset" class="btn btn-warning">Reset campi</button>
      </div>
  </form>
</div>
@endsection
