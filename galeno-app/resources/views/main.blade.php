@extends('layouts.center-field')

@section('title', 'Login')

@section('content')
<main class='w-full md:w-1/2 mx-auto flex flex-col items-center justify-center'>
  @include('header')

  <div class='mt-16 w-full md:w-1/2 mx-auto'>
    <login-form></login-form>
  </div>
</main>
@endsection
