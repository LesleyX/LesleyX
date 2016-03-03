@extends('layouts.master')

@section('content')

@if(!Auth::check())
  <h1>LesleyX Project Management</h1>

  <p>LesleyX</p>

  <p><img src="{{ asset('images/lxpm.gif') }}" alt=""></p>

  <a class="btn btn-large btn-info" href="auth/register">Register</a>

  <p class="login">Already a member? <a class="btn btn-large btn-info" href="auth/signin">Login</a></p>
@endif

@if (Auth::check())
  <div class="container-fluid">
    <div class="row">
      @include('layouts.partials.sidebar')
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Dashboard</h1>

        <h2 class="sub-header">Projects</h2>
        <a class="btn btn-info" href="{{ route('projects.create') }}">New Project</a>
      </div>
    </div>
  </div>
@endif
  
 
@stop