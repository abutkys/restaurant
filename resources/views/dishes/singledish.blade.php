@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-sm-4 my-4">
    <div class="card">
      <img class="card-img-top" src="{{$dish->image_url}}" alt="">
      <div class="card-body">
        <h4 class="card-title">{{$dish->title}}</h4>
        <p class="card-text">{{str_limit($dish->description)}}</p>
      </div>
      <div class="card-footer">
        <p><strong>{{$dish->price}} euro</strong></p>
        <a href="{{route('dish.edit', $dish)}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
        <form class="" action="{{route('dish.delete', $dish)}}" method="post">
            @method('DELETE')
            @csrf
            <br>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
