@extends('layouts.master')

@section('content')
    <div class="form_create_main">
        <form method="post" action="{{route('main.update', $main)}}">
            @method('PUT')
            {!! csrf_field() !!}
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-10 col-form-label"><strong>Title</strong></label>
                <div class="col-sm-4">
                    <input type="text" name="title" class="form-control" value="{{$main->title}}">
                    <br>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>

            </div>
        </form>
    </div>
@endsection
