@extends('layouts.master')

@section('content')
	@if(!Auth::check())
		<h1>LesleyX Project Management</h1>

		<p>LesleyX is a student-led collaborative initiative established to promote cross-disciplinary innovation and research. It is our mission to provide a transformative and enriching experience to individuals with an affinity for learning, a desire to innovate, and a passion for spreading ideas worth sharing.</p>

		<p><img src="{{ asset('img/lx.gif') }}" /></p>

		<a class="btn btn-large btn-info" href="/auth/register">Sign Up</a>

		<p class="login">Already a member? <a class="btn btn-large btn-info" href="/auth/login">Login</a></p>
	@endif

	@if(Auth::check())
		<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li style="margin-left:20px;">
                <img src="{{ Auth::user()->getAvatarUrl() }}" height="50" width="50" style="border-radius:25px;" />
            </li>
            <li><a href="#"> @ {{ Auth::user()->username }}</a></li>
            <li class="active"><a href="#">LESLEYX<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Edit Account</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Todos</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Account</a></li>
            <li><a href="">Help</a></li>
            <li><a href="{{ route('auth.logout') }}">Sign Out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <h2 class="sub-header">Projects</h2>
          <a href="btn btn-info" href="{{ route('projects.create') }}">New Project</a>
        </div>
      </div>
    </div>
	@endif

@stop