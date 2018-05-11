@extends('layouts.master')
@section('content')
             {{-- @include('layout.success') --}}
            <form action="{{route('reservation.update', $reservation)}}" method="post">
                @method('PUT')
                {!! csrf_field() !!}
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="m_fname">First Name</label>
                  <input type="text" class="form-control" id="m_fname" name="name" value="{{$reservation->name}}">
                </div>
                <div class="col-md-6 form-group">
                  <label for="m_lname">Last Name</label>
                  <input type="text" class="form-control" id="m_lname" name="lastname" value="{{$reservation->lastname}}">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="m_email">Email</label>
                  <input type="email" class="form-control" id="m_email" name="email" value="{{($reservation->email)}}">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="m_people">How Many People</label>
                  <select id="m_people" class="form-control" name="people_number">
                    <option value="1">1 People</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4+">4+ People</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label for="m_phone">Phone</label>
                  <input type="text" class="form-control" id="m_phone" name="phone_number" value="{{$reservation->phone_number}}">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="m_date">Date</label>
                  <input type="text" class="form-control" id="m_date" name="date" value="{{$reservation->date}}">
                </div>
                <div class="col-md-6 form-group">
                  <label for="m_time">Time</label>
                  <input type="text" class="form-control" id="m_time" name="time" value="{{$reservation->time}}">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="m_message">Message</label>
                  <textarea class="form-control" id="m_message" cols="30" rows="7" name="message" value="{{$reservation->message}}">{{$reservation->message}}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" name="edit" value="Submit" class="btn btn-primary btn-lg btn-block">
                </div>
              </div>
          </form>
      @endsection
