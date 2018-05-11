<!DOCTYPE html>

<html lang="en">

@include('layout.head')

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">

@include('layout.success')

@include('layout.nav')


@include('layout.modal')

@yield('content')


@include('layout.footer')

@include('layout.script')

</body>

</html>
