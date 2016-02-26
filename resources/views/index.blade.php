@extends('layouts.master')

@section('content')
	<h1>LesleyX Project Management</h1>

	<p>LesleyX is a student-led collaborative initiative established to promote cross-disciplinary innovation and research. It is our mission to provide a transformative and enriching experience to individuals with an affinity for learning, a desire to innovate, and a passion for spreading ideas worth sharing.</p>

	<p><img src="{{ asset('img/lx.gif') }}" /></p>

	<a class="btn btn-large btn-info" href="/auth/register">Sign Up</a>

	<p class="login">Already a member? <a class="btn btn-large btn-info" href="/auth/login">Login</a></p>

@stop