
    @extends('layout.master')

    @section('content')


        @extends('layout.success')

        <section class="ftco-cover" style="background-image: url(images/bg_3.jpg);" id="section-home">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center ftco-vh-100">
              <div class="col-md-12">
                <h1 class="ftco-heading ftco-animate mb-3">Welcome To Taste Restaurant</h1>
                <h2 class="h5 ftco-subheading mb-5 ftco-animate">A free template for Restaurant Websites Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></h2>
                <p><a href="#" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">Reservation</a></p>

              </div>
            </div>
          </div>
        </section>
        <!-- END section -->
        <br>
<a href="{{route('createdish.page')}}" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">Create dish</a>
        <br>
<div class="row">
@foreach($dishes as $dish)
<div class="col-sm-4 my-4">
<div class="card">
<img class="card-img-top" src="{{$dish->image_url}}" alt="">
<div class="card-body">
<h4 class="card-title">{{$dish->title}}</h4>
<p class="card-text">{{str_limit($dish->description)}}</p>
</div>
<div class="card-footer">
<a href="#" class="btn btn-primary">{{$dish->price}} euro</a>
</div>
<div class="card-footer">
<a href="{{route('singledish.page', $dish->id)}}" class="btn btn-primary">Show more</a>
 {{-- <a href="#"  data-id="{{$dish->id}}" class="cart btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add 2 Cart</a> --}}
</div>
</div>
</div>
@endforeach
</div>
@endsection
