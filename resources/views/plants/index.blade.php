@extends("layouts.app")

@section("head-title", "Plants")

@section("main-content")
<div class="container text-center">
<h2>Piante</h2>
<a href="{{route("plant.create")}}" class="btn btn-primary mt-5">aggiungi nuova pianta</a>
<div class="row g-3 mt-5">
@forelse ($plants as $plant )
<div class="col-4">
    <a href="{{route("plant.show", $plant->id)}}">
<div class="card">
      <h4>{{$plant->name}}</h4>
      <div class="card-body">
          <img src="{{$plant->image}}" alt="{{$plant->name}}">
    </div>
    <form action="{{ route("plant.delete", $plant->id)}}" class="btn btn-danger p-0" method="POST" class="d-inline" custom-data-id="{{$plant->id}}">
        @csrf
        @method("DELETE")
        <button type="submit" class="text-white w-100 border-0 bg-transparent rounded-2">
            Elimina
        </button>
    </form>
  </div>
</a>
</div>
@empty
    <div class="col-12">
        <h2>Non ci sono piante in catalogo....</h2>
    </div>
@endforelse
</div>
</div>
@endsection

@section("script-js")
   @vite("resources/js/plant.js")
@endsection
