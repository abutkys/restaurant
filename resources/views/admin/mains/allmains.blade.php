@extends('layouts.master')

@section('header')
    @if(session('message'))
    <div class="alert alert-success" role="alert">
     {{session('message')}}
    </div>
    @endif
    <h1>Menu</h1>
    <br>
    <br>
    <a href="{{route('createmain.page')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create menu</a>
    <br>
    <br>    

    @foreach($mains as $main)
        <table class="table table-striped">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h2 class="card-title">{{$main->title}}</h2>
            <a href="{{route('mains.edit', $main)}}" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Edit</a>
            <form class="" action="{{route('mains.delete', $main)}}" method="post">
                @method('DELETE')
                @csrf
                <br>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            {{-- <a href="{{route('mains.delete', $main)}}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</a> --}}
          </div>
        </div>
    @endforeach
@endsection
