@extends('layouts.master')
@section('content')

    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Number of reservations</th>
          <th scope="col">Name</th>
          <th scope="col">Lastname</th>
          <th scope="col">Email</th>
          <th scope="col">Phone number</th>
          <th scope="col">People</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($reservations as $reservation)
              <tr>
                  <th scope="row">{{$reservation->id}}</th>
                  <td>{{$reservation->name}}</td>
                  <td>{{$reservation->lastname}}</td>
                  <td>{{$reservation->email}}</td>
                  <td>{{$reservation->phone_number}}</td>
                  <td>{{$reservation->people_number}}</td>
                  <td>{{$reservation->date}}</td>
                  <td>{{$reservation->time}}</td>
                  <td>{{$reservation->message}}</td>
                  <td><a href="{{route('reservations.edit', $reservation)}}" class="btn btn-success btn-sm" role="button" aria-pressed="true">Edit reservation</a>
                  </td>
                  <td>
                    <form class="" action="{{route('reservations.delete', $reservation->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete reservation</button>
                    </form>
                  </td>
              </tr>

          @endforeach
        {{-- <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr> --}}
      </tbody>
    </table>

@endsection
