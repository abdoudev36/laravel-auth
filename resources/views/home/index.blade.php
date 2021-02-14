@extends('layouts.layout')
@section('title') Abdou Dev @endsection

@section('body')
<nav class="main-navbar navbar navbar-expand-lg navbar-dark bg-success">
	<div class="container">
		<a href="" class="navbar-brand text-uppercase">abdev</a>

		<ul class="navbar-nav">
			<li class="nav-item"> <a href="{{ route('home') }}" class="nav-link text-capitalize">home</a></li>
			@auth
			<li class="nav-item"> <a href="{{ route('logout') }}" class="nav-link text-capitalize">logout</a></li>
			@endauth
			@guest
			<li class="nav-item"> <a href="{{ route('login') }}" class="nav-link text-capitalize">login</a></li>
			<li class="nav-item"> <a href="{{ route('signup') }}" class="nav-link text-capitalize">signup</a></li>
			@endguest
		</ul>
	</div>
</nav>
@endsection