@extends('layouts.master')
    @section('content')
<br>
<br>
<br>
<br>
<br>
@include('layout.errors')
<div class="container">


<form method="post" action="{{route('dishes.store')}}"  class="category_form add_dish">
        {!! csrf_field() !!}
        <div class="form-group row">
            <label for="exampleFormControlInput1"><strong>Title</strong></label>
                <input type="text" class="form-control" name="title" placeholder="" value="{{old('title')}}">
        </div>

      <div class="form-group row">
        <label for="exampleFormControlInput1"><strong>Price</strong></label>
        <input type="text" class="form-control" name="price" placeholder="" value="{{old('price')}}">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1"><strong>Description</strong></label>
        <textarea class="form-control" name="description" rows="3" value="{{old('description')}}"></textarea>
        </div>
        <div class="form-group">
        <label for="exampleFormControlInput1"><strong>Dish Image URL</strong></label>
        <input type="text" class="form-control" name="image_url" placeholder="" value="{{old('image_url')}}">
        </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1"><strong>Dish category</strong></label>
                <select class="form-control" name="main_id">
                    @foreach($mains as $main)
                        <option value="{{ $main->id}}" {{old('main_id') == $main->id ? 'selected': '' }}> {{$main->title}}</option>
                    @endforeach
                </select>
            </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Add</button>
        <br>
        <br>
        <br>
        <br>
</form>
</div>
@endsection
