@extends("layouts.app")

@section("head-title", "Plants")

@section("main-content")
<div class="container text-center">
<h2>Plants</h2>
<div class="row g-3 mt-5">
@forelse ($plants as $plant )
<div class="col-4">
  <div class="card">
      <h4>{{$plant->name}}</h4>
      <div class="card-body">
          <img src="{{$plant->image}}" alt="{{$plant->name}}">
    </div>
  </div>
</div>
@empty
    <div class="col-12">
        <h2>Non ci sono passegeri in partenza....</h2>
    </div>
@endforelse
</div>
</div>
@endsection
