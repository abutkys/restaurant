@extends('layouts.master')
@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <form method="post" action="{{route('dish.update', $dish)}}"  class="category_form add_dish">
        @method('PUT')
        {!! csrf_field() !!}
        <div class="form-group row">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label"><strong>Title</strong></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="title" placeholder="" value="{{$dish->title}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label"><strong>Price</strong></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="price" placeholder="" value="{{$dish->price}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label"><strong>Description</strong></label>
            <div class="col-sm-4">
            <textarea class="form-control" name="description" rows="3" value="{{$dish->description}}">{{$dish->description}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label"><strong>Dish Image URL</strong></label>
            <div class="col-sm-4">
            <input type="text" class="form-control" name="image_url" placeholder="" value="{{$dish->image_url}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label"><strong>Dish category</strong></label>
            <div class="col-sm-4">
            <select class="form-control" name="main_id">
                @foreach($mains as $main)
                    <option value="{{ $main->id}}" {{old('main_id') == $main->id ? 'selected': '' }}> {{$main->title}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success btn-lg">Submit</button>


    </form>

</div>
@endsection
