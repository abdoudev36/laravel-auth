@extends('layouts.auth')
@section('title') Signup @endsection

@section('body')

<section class="auth-wrapper d-flex align-items-center justify-content-center">
	<form action="{{ route('signup') }}" method="post" class="signup-form d-flex flex-column justify-content-center shadow">
		@csrf
		
		{{-- top icon --}}
		<div class="top-icon d-flex flex-column align-items-center justify-content-center">
			<ion-icon name="person-circle-outline"></ion-icon>
			<h3 class="text-capitalize text-center p-0 m-0">abdou dev</h3>
		</div>

		{{-- divider --}}
		<div class="divider my-3 d-flex align-items-center justify-content-center text-capitalize text-center">create an account</div>

		{{-- username --}}
		<div class="form-group">
			<input type="text" value="{{ old('username') }}" name="username" class="form-control rounded-0 @error('username') border border-danger @enderror" placeholder="username">
			@error('username')
			<div class="alert alert-danger d-flex align-items-center text-capitalize m-0 mt-2 rounded-0">{{ $message }}</div>
			@enderror
		</div>

		{{-- email --}}
		<div class="form-group">
			<input type="email" value="{{ old('email') }}" name="email" class="form-control rounded-0 @error('email') border border-danger @enderror" placeholder="email address">
			@error('email')
			<div class="alert alert-danger d-flex align-items-center text-capitalize m-0 mt-2 rounded-0">{{ $message }}</div>
			@enderror
		</div>

		{{-- password --}}
		<div class="form-group">
			<input type="password" name="password" class="form-control rounded-0 @error('password') border border-danger @enderror" placeholder="*********">
			@error('password')
			<div class="alert alert-danger d-flex align-items-center text-capitalize m-0 mt-2 rounded-0">{{ $message }}</div>
			@enderror
		</div>

		{{-- re_password --}}
		<div class="form-group">
			<input type="password" name="re_password" class="form-control rounded-0 @error('re_password') border border-danger @enderror" placeholder="repeat password">
			@error('re_password')
			<div class="alert alert-danger d-flex align-items-center text-capitalize m-0 mt-2 rounded-0">{{ $message }}</div>
			@enderror
		</div>

		{{-- submit button --}}
		<button class="submit-btn btn rounded-0 text-capitalize"> signup </button>

		{{-- you do not have an account --}}
		<a href="{{ route('login') }}" class="have-account text-center text-capitalize mt-3 text-decoration-none">you have an account ? <span>login</span></a>
		
		{{-- home --}}
		<a href="{{ route('home') }}" class="home mt-3 d-flex align-items-center justify-content-center text-decoration-none">
			<span class="text-capitalize">go to</span>
			<ion-icon class="mx-1" name="chevron-forward-outline"></ion-icon>
			<ion-icon name="home-outline"></ion-icon>
		</a>
	</form>
</section>

@endsection