@extends("layouts.app")

@section("head-title", "Plants")

@section("main-content")
<div class="container text-center">
  <h2>{{$plant["name"]}}</h2>
  <div class="row mt-5 justify-content-center">
    <div class="col-4">
      <div class="card">
        <img src="{{$plant["image"]}}" alt="{{$plant["name"]}}">
        <div class="card-body">
          <ul class="text-start">
            <li><b>specie:</b> {{$plant["species"]}}</li>
            <li><b>habitat:</b> {{$plant["habitat"]}}</li>
            <li><b>esposizione:</b> {{$plant["exposure"]}}</li>
            <li><b>descrizione:</b> {{$plant["description"]}}</li>
          </ul>
        </div>
        <a href="#" class="btn btn-success">Modifica</a>
      </div>
    </div>
  </div>
</div>
@endsection
