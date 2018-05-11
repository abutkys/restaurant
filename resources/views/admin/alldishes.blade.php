@extends('layouts.master')

@section('header')
    @if(session('message'))
    <div class="alert alert-success" role="alert">
     {{session('message')}}
    </div>
    @endif
@foreach($dishes as $dish)
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{$dish->image_url}}" alt="">
    <div class="card-body">
      <h5 class="card-title"><strong>{{$dish->title}}</strong></h5>
      <p class="card-text">{{str_limit($dish->description)}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">
        <a href="{{route('dish.edit', $dish->id)}}" class="btn btn-warning">Edit</a>
        <form class="" action="{{route('dish.delete', $dish->id)}}" method="post">
            @method('DELETE')
            @csrf
            <br>
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </small>
     </div>
    </div>
  </div>
@endforeach
@endsection




{{-- @extends('layouts.master')

@section('header')
    @if(session('message'))
    <div class="alert alert-success" role="alert">
     {{session('message')}}
    </div>
    @endif
    <h1>Dish</h1>
    <br>
    <br>
    <a href="{{route('createdish.page')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create dish</a>
    <br>
    <br>
    <div class="row">
        @foreach($dishes as $dish)
            <div class="col-sm-4 my-4">
                <div class="card">
                    <br>
                    <img class="card-img-top" src="{{$dish->image_url}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><strong>{{$dish->title}}</strong></h4>
                            <p class="card-text">{{str_limit($dish->description)}}</p>
                        </div>
                    <div class="card-footer">
                        <p class="price_center"><strong>{{$dish->price}} euro</strong></p>

                        <a href="{{route('dish.edit', $dish->id)}}" class="btn btn-warning">Edit</a>
                        <form class="" action="{{route('dish.delete', $dish->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                          <br>
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endsection --}}
