@extends('layouts.app')

@section('content')
  <section class="text-center pt-5">

    <h1>{{ $technology->technology }}</h1>
    <h2>{{ $technology->id }}</h2>
  </section>
@endsection